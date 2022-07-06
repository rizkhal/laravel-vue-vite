<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            // ->editColumn('passions_count', fn ($row) => $row->passions->count())
            ->editColumn('created_at', fn ($row) => $row->created_at->format('d/m/Y'))
            ->addColumn('action', function ($row) {
                return <<<BLADE
                    <div class="d-flex">
                        <button class="btn btn-warning btn-edit btn-sm mr-2" data-id="$row->id" data-name="$row->name">
                            Ubah
                        </button>
                        <button class="btn btn-danger btn-destroy btn-sm" data-id="$row->id">
                            Hapus
                        </button>
                    </div>
                BLADE;
            })
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model): QueryBuilder
    {
        return $model->newQuery()
            ->select('category_passions.*')
            ->withCount('passions');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('categorydatatable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('lfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('export_dropdown')->attr(['id' => 'dropdown-wrapper'])
            )
            ->parameters([
                'language' => [
                    'search' => 'Cari',
                    'lengthMenu' => __('Menampilkan _MENU_ baris'),
                    "infoEmpty" => __('Tidak ada data ditemukan'),
                    'info' => __('Menampilkan _PAGE_ dari _PAGES_ halaman')
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            Column::computed('No')->data('DT_RowIndex'),
            Column::make('name')->title('Nama Kategori'),
            Column::make('passions_count')->title('Total Passion')->searchable(false),
            Column::make('created_at')->title('Dibuat'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                ->title('Aksi'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Category_' . date('YmdHis');
    }
}
