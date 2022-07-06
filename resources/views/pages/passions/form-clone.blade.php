@foreach ($items as $item)
    <div class="row-clone">
        <div class="row">
            <div class="col-lg-6">
                @isset($item['id'])
                    <input
                        type="hidden"
                        value="{{ $item['id'] }}"
                        name="details[{{ $loop->iteration }}][id]"
                    />
                @endisset

                <x-form.text
                    type="text"
                    label="Kata Kunci"
                    :value="$item['key']"
                    name="details[{{ $loop->iteration }}][key]"
                    overide-name="details.{{ $loop->iteration }}.key"
                >
                    @if ($errors->has("details.$loop->iteration.key"))
                        <span class="invalid-feedback">{{ $errors->first("details.$loop->iteration.key") }}</span>
                    @endif
                </x-form.text>
            </div>
            <div class="col-lg-6">
                <x-form.text
                    type="text"
                    label="Isi"
                    :value="$item['value']"
                    name="details[{{ $loop->iteration }}][value]"
                    overide-name="details.{{ $loop->iteration }}.value"
                >
                    @if ($errors->has("details.$loop->iteration.value"))
                        <span class="invalid-feedback">{{ $errors->first("details.$loop->iteration.value") }}</span>
                    @endif
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
@endforeach
