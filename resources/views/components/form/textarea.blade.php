@props(['label', 'name', 'value' => null, 'required' => true, 'rows' => 20, 'cols' => 20])

<div class="form-group">
    <label>{{ $label }}
        <span class="text-danger">
            @if ($required)
                *
            @endif
        </span>
    </label>
    <textarea
        rows="{{ $rows }}"
        cols="{{ $cols }}"
        name="{{ $name }}"
        class="{{ $errors->first($name) ? 'form-control is-invalid' : 'form-control' }}"
    >{{ old($name, $value) }}</textarea>

    @isset($slot)
        {{ $slot }}
    @endisset

    <x-form.field-error :message="$errors->first($name)" />
</div>
