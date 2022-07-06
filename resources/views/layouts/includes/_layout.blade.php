@include('layouts.includes._mobile-header')

<div class="d-flex flex-column flex-root">
    <x-page>
        @include('layouts.includes._aside')

        <x-page.wrapper>
            <!--begin::Header-->
            <div
                id="kt_header"
                class="header header-fixed"
            >
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div
                        class="header-menu-wrapper header-menu-wrapper-left"
                        id="kt_header_menu_wrapper"
                    >
                        <!--begin::Header Menu-->
                        <div
                            id="kt_header_menu"
                            class="header-menu header-menu-mobile header-menu-layout-default"
                        >
                            <!--begin::Header Nav-->
                            <ul
                                class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                @if (Breadcrumbs::has())
                                    @foreach (Breadcrumbs::current() as $crumbs)
                                        @if ($crumbs->url() && !$loop->last)
                                            <li class="breadcrumb-item">
                                                <a href="{{ $crumbs->url() }}">
                                                    <span class="text-muted">{{ $crumbs->title() }}</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="breadcrumb-item">
                                                <a href="{{ $crumbs->url() }}">
                                                    <span class="text-primary">{{ $crumbs->title() }}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::User-->
                        <div class="topbar-item">
                            <div
                                class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                id="kt_quick_user_toggle"
                            >
                                <span
                                    class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                <span
                                    class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                                <span class="symbol symbol-35 symbol-light-success">
                                    <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                </span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div
                class="content d-flex flex-column flex-column-fluid"
                id="kt_content"
            >
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        {{ $slot }}
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
        </x-page.wrapper>
    </x-page>
</div>
