<head>
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta
        name="description"
        content="Updates and statistics"
    />

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link
        href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link
        href="{{ asset('plugins/global/plugins.bundle.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('css/style.bundle.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link
        href="{{ asset('css/themes/layout/header/base/light.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('css/themes/layout/header/menu/light.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('css/themes/layout/brand/dark.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('css/themes/layout/aside/dark.css?v=7.0.5') }}"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Layout Themes-->
    <link
        rel="shortcut icon"
        href="{{ asset('media/logos/favicon.ico') }}"
    />

    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >

    @stack('styles')
</head>
