<x-auth-layout :title="$title">
    <form
        class="form"
        method="POST"
        novalidate="novalidate"
        id="kt_login_signin_form"
        action="{{ route('auth.store.login') }}"
    >
        @csrf

        <!--begin::Title-->
        <div class="pb-13 pt-lg-0 pt-5">
            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Login to
                <b><span class="text-warning">SMART</span><span class="text-primary">SCHOOL</span></b>
            </h3>
            <span class="text-muted font-weight-bold font-size-h4">Silahkan masukkan informasi akun
                anda!</span>
        </div>
        <!--begin::Title-->
        <!--begin::Form group-->
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Username</label>
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                type="text"
                name="username"
                autocomplete="off"
                placeholder="Username.."
                value=""
            />
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <div class="d-flex justify-content-between mt-n5">
                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                <a
                    href="javascript:;"
                    class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                    id="kt_login_forgot"
                >Forgot Password ?</a>
            </div>
            <input
                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                type="password"
                name="password"
                autocomplete="off"
                placeholder="Password.."
            />
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
            <div class="checkbox-inline">
                <label class="checkbox m-0 text-muted">
                    <input
                        type="checkbox"
                        name="remember"
                    />
                    <span></span>Remember me</label>
            </div>
        </div>
        <!--end::Form group-->
        <!--begin::Action-->
        <div class="pb-lg-0 pb-5">
            <button
                type="submit"
                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"
            >Login</button>
        </div>
        <!--end::Action-->
    </form>
</x-auth-layout>
