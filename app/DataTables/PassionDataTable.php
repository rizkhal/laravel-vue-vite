<?php

namespace App\DataTables;

use App\Models\Passion;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PassionDataTable extends DataTable
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
            ->editColumn('summary', fn ($row) => $row->summary_excerpt)
            ->editColumn('description', fn ($row) => $row->description_excerpt)
            ->editColumn('created_at', fn ($row) => $row->created_at->format('d/m/Y'))
            ->filterColumn('category', fn ($query, $keyword) => $query->whereLike(['category.name'], trim($keyword)))
            ->addColumn('action', function ($row) {
                $route = route('passions.edit', ['passion' => $row->id]);

                return <<<BLADE
                    <div class="d-flex">
                        <a href="$route" class="btn btn-warning btn-sm mr-2">
                            Ubah
                        </a>
                        <button class="btn btn-danger btn-sm btn-destroy" data-id="$row->id">
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
     * @param \App\Models\Passion $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Passion $model): QueryBuilder
    {
        return $model->newQuery()
            ->with([
                'details',
                'category'
            ])
            ->select('passions.*')
            ->withCount('details');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('passiondatatable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('lfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('export_dropdown'),
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
            Column::make('title')->title('Judul'),
            Column::make('summary')->title('Ringkasan'),
            Column::make('description')->title('Keterangan'),
            Column::make('category.name')->title('Kategori'),
            Column::make('details_count')->title('Kata Kunci')->width(80)->searchable(false),
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
        return 'Passion_' . date('YmdHis');
    }
}
