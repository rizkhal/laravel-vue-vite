<x-app-layout>
    <div class="card">
        <form
            method="POST"
            action="{{ route('passions.store') }}"
        >
            @csrf
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <x-form.text
                            label="Judul"
                            name="title"
                            type="text"
                        />
                    </div>
                    <div class="col-lg-6">
                        <x-form.select
                            label="Kategori"
                            :required="true"
                            name="category_id"
                        >
                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                                >{{ $category->name }}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <x-form.textarea
                            label="Ringkasan"
                            name="summary"
                            class="mb-0"
                        />
                    </div>

                    <div class="col-lg-6">
                        <x-form.textarea
                            label="Keterangan"
                            :required="false"
                            name="description"
                            class="mb-0"
                        />
                    </div>
                </div>
            </div>
            <div class="card-footer clone-container">
                @if (!old('details'))
                    <div class=" row-clone">
                        <div class="row">
                            <div class="col-lg-6">
                                <x-form.text
                                    label="Kata Kunci"
                                    name="details[0][key]"
                                    type="text"
                                >
                                </x-form.text>
                            </div>
                            <div class="col-lg-6">
                                <x-form.text
                                    type="text"
                                    label="Isi"
                                    name="details[0][value]"
                                >
                                </x-form.text>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button
                                type="button"
                                class="btn btn-danger btn-sm btn-remove"
                            >
                                Hapus
                            </button>
                        </div>
                    </div>
                @endif

                @includeWhen(old('details'), 'pages.passions.form-clone', ['items' => old('details')])
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button
                        type="button"
                        id="btn-clone"
                        class="btn btn-primary btn-sm"
                    >
                        Clone
                    </button>
                </div>
            </div>

            <div class="card-footer">
                <a
                    href="{{ route('passions.index') }}"
                    class="btn btn-danger mr-2"
                >
                    {{ __('Kembali') }}
                </a>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    {{ __('Simpan') }}
                </button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                const row = $('.row-clone');
                const container = $('.clone-container');

                $('#btn-clone').click(function(e) {
                    e.preventDefault();

                    let childLength = container.children().length;

                    if (childLength) {
                        container.find('.btn-remove').attr('disabled', false);
                    }

                    row.last().clone().appendTo(container).find('input')
                        .attr('name', (_, oldVal) => {
                            return oldVal.replace(/\[(\d+)\]/, function(_, m) {
                                return `[${childLength}]`;
                            });
                        })
                        .val(null);

                    return false;
                });

                $(document).on('click', '.btn-remove', function(e) {
                    e.preventDefault();

                    let childLength = container.children().length;

                    if (childLength > 1) {
                        let currentNode = $(this).parent().parent();
                        currentNode.remove();
                    } else {
                        $(this).attr('disabled', true);
                    }
                });

                $('.form-group > select[name="category_id"]').select2();
            });
        </script>
    @endpush
</x-app-layout>
