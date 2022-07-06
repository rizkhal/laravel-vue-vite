<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.includes._head')

<body
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"
>
    @include('layouts.includes._layout')


    @include('layouts.includes._panel')


    @include('layouts.includes._scripts')
</body>

</html>
