@props(['message' => null])

<span
    class="invalid-feedback mt-1"
    {{ $attributes }}
>
    @if (!is_null($message))
        {{ $message }}
    @endif
</span>
