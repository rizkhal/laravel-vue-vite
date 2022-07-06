    <div
        role="dialog"
        id="{{ $id }}"
        aria-hidden="true"
        aria-labelledby="myModalComponent"
        {{ $attributes->merge(['class' => 'modal fade']) }}
    >
        <div
            class="modal-dialog"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h5
                        class="modal-title"
                        id="exampleModalLabel"
                    >{{ $title }}</h5>
                    <button
                        type="button"
                        class="close btn-close-modal"
                    >
                        <i
                            aria-hidden="true"
                            class="ki ki-close"
                        ></i>
                    </button>
                </div>
                @isset($body)
                    <div class="modal-body">
                        {{ $body }}
                    </div>
                @endisset
                @isset($footer)
                    <div class="modal-footer">
                        {{ $footer }}
                    </div>
                @endisset
            </div>
        </div>
    </div>
