@props(['label', 'name', 'overideName' => null, 'value' => null, 'type' => 'text', 'required' => true])

<div class="form-group">
    <label>{{ $label }}
        <span class="text-danger">
            @if ($required)
                *
            @endif
        </span>
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="{{ $errors->first($overideName ? $overideName : $name) ? 'form-control is-invalid' : 'form-control' }}"
    />
    @isset($slot)
        {{ $slot }}
    @endisset

    <x-form.field-error :message="$errors->first($name)" />
</div>
