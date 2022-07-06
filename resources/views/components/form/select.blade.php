@props(['label', 'name', 'required' => true])


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
    >
        {{ $slot }}
    </select>

    <x-form.field-error :message="$errors->first($name)" />
</div>
