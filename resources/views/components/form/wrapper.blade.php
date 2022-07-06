@props(['ajax' => false, 'action', 'method' => 'POST', 'title' => null, 'titleIcon' => null, 'back' => true, 'backUrl' => url()->previous(), 'submitText'])

<form
    action="{{ $action }}"
    method="POST"
>
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    <div class="card card-custom">
        @isset($header)
            {{ $header }}
        @else
            @if ($title)
                <div class="card-header">
                    <div class="card-title">
                        @if ($titleIcon)
                            <span class="card-icon">
                                <i class="{{ $titleIcon }} text-primary"></i>
                            </span>
                        @endif

                        <h3 class="card-label">{{ $title }}</h3>
                    </div>
                </div>
            @endif
        @endisset

        <div class="card-body">
            {{ $slot }}
        </div>

        @isset($footer)
            {{ $footer }}
        @else
            <div class="card-footer">
                @if ($back)
                    <a
                        href="{{ $backUrl }}"
                        class="btn btn-danger btn-sm"
                    >Kembali</a>
                @endif

                <button
                    class="btn btn-primary btn-sm"
                    type="submit"
                >
                    {{ $submitText }}
                </button>
            </div>
        @endisset
    </div>
</form>
