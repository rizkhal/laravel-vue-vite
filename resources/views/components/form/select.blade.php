@props(['label', 'name', 'required' => true, 'select2' => false])


<div class="form-group">
    <label>{{ $label }}
        <span class="text-danger">
            @if ($required)
                *
            @endif
        </span>
    </label>
    <select
        name="{{ $name }}"
        class="{{ $errors->first($name) ? 'form-control is-invalid' : 'form-control' }}"
        @if ($select2) data-placeholder="{{ $label }}" @endif
    >
        @if ($select2)
            <option value=""></option>
        @endif

        {{ $slot }}
    </select>

    <x-form.field-error :message="$errors->first($name)" />
</div>
