<script>
    var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!};
</script>

<script src="{{ asset('plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('js/scripts.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('js/pages/widgets.js?v=7.0.5') }}"></script>

@vite('resources/js/app.js')
{{-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}
<script src="{{ asset('vendor/datatables/buttons.server-side.custom.js') }}"></script>

@if ($message = Session::get('success'))
    @push('scripts')
        <script type="text/javascript">
            Swal.fire('Berhasil', '{{ $message }}', 'success');
        </script>
    @endpush
@endif

@if ($message = Session::get('error'))
    @push('scripts')
        <script type="text/javascript">
            Swal.fire('Terjadi Kesalahan', '{{ $message }}', 'error');
        </script>
    @endpush
@endif

@stack('scripts')
