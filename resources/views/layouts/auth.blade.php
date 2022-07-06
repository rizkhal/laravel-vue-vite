{{-- Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. --}}
<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    {{ Metronic::printAttrs('html') }}
    {{ Metronic::printClasses('html') }}
>

<head>
    <meta charset="utf-8" />

    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', $title ?? '')</title>

    {{-- Meta Data --}}
    <meta
        name="description"
        content="@yield('page_description', $page_description ?? '')"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    {{-- Favicon --}}
    <link
        rel="shortcut icon"
        href="{{ asset('media/logos/favicon.ico') }}"
    />

    {{-- Fonts --}}
    {{ Metronic::getGoogleFontsInclude() }}

    {{-- Global Theme Styles (used by all pages) --}}
    @foreach (config('layout.resources.css') as $style)
        <link
            href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}"
            rel="stylesheet"
            type="text/css"
        />
    @endforeach

    {{-- Layout Themes (used by all pages) --}}
    @foreach (Metronic::initThemes() as $theme)
        <link
            href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}"
            rel="stylesheet"
            type="text/css"
        />
    @endforeach

    {{-- Includable CSS --}}
    @stack('styles')
</head>

<body
    {{ Metronic::printAttrs('body') }}
    {{ Metronic::printClasses('body') }}
>

    @if (config('layout.page-loader.type') != '')
        @include('layout.partials._page-loader')
    @endif

    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div
            class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white"
            id="kt_login"
        >
            <!--begin::Aside-->
            <div
                class="login-aside d-flex flex-column flex-row-auto px-6"
                style="background-color: #F2C98A;"
            >
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <!--begin::Aside header-->
                    <a
                        href="#"
                        class="text-center my-10"
                    >
                        <img
                            src="https://v2.sekolahandalan.id/assets/media/logos/tutwuri.png"
                            class="max-h-100px"
                            alt=""
                        />
                        <img
                            src="https://v2.sekolahandalan.id/assets/media/logos/logo-sm.png"
                            class="max-h-80px"
                            alt=""
                        />
                    </a>
                    <!--end::Aside header-->
                    <!--begin::Aside title-->
                    <h3
                        class="font-weight-bolder text-center font-size-h4 font-size-h1-lg"
                        style="color: #986923;"
                    >
                        Selamat Datang di Smart School
                        <br />
                        Sistem Informasi Akademik Sekolah 2022
                    </h3>
                    <!--end::Aside title-->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div
                    class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                    style="background-image: url(https://v2.sekolahandalan.id/assets/media/svg/illustrations/login.png)"
                ></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div
                class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        {{ $slot }}
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                    {{-- <div class="login-form login-signup">
                        <!--begin::Form-->
                        <form
                            class="form"
                            novalidate="novalidate"
                            id="kt_login_signup_form"
                        >
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your
                                    account</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                    type="text"
                                    placeholder="Fullname"
                                    name="fullname"
                                    autocomplete="off"
                                />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                    type="email"
                                    placeholder="Email"
                                    name="email"
                                    autocomplete="off"
                                />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                    type="password"
                                    placeholder="Password"
                                    name="password"
                                    autocomplete="off"
                                />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                    type="password"
                                    placeholder="Confirm password"
                                    name="cpassword"
                                    autocomplete="off"
                                />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="checkbox mb-0">
                                    <input
                                        type="checkbox"
                                        name="agree"
                                    />I Agree the
                                    <a href="#">terms and conditions</a>.
                                    <span></span></label>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button
                                    type="button"
                                    id="kt_login_signup_submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4"
                                >Submit</button>
                                <button
                                    type="button"
                                    id="kt_login_signup_cancel"
                                    class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3"
                                >Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div> --}}
                    <!--end::Signup-->
                    <!--begin::Forgot-->
                    {{-- <div class="login-form login-forgot">
                        <!--begin::Form-->
                        <form
                            class="form"
                            novalidate="novalidate"
                            id="kt_login_forgot_form"
                        >
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten
                                    Password
                                    ?</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your
                                    password</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                    type="email"
                                    placeholder="Email"
                                    name="email"
                                    autocomplete="off"
                                />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0">
                                <button
                                    type="button"
                                    id="kt_login_forgot_submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4"
                                >Submit</button>
                                <button
                                    type="button"
                                    id="kt_login_forgot_cancel"
                                    class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3"
                                >Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div> --}}
                    <!--end::Forgot-->
                </div>
                <!--end::Content body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    {{-- Global Config (global config for global JS scripts) --}}
    <script>
        var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!};
    </script>

    {{-- Global Theme JS Bundle (used by all pages) --}}
    @foreach (config('layout.resources.js') as $script)
        <script
            src="{{ asset($script) }}"
            type="text/javascript"
        ></script>
    @endforeach

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

    {{-- Includable JS --}}
    @stack('scripts')

</body>

</html>
