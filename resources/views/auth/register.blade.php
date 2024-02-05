@extends('layouts.app')

@section('content')
    <main id="content" class="w-full max-w-md mx-auto p-6">
        {{-- <a href="index.html" class="header-logo">
            <img src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto block dark:hidden">
            <img src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto hidden dark:block">
        </a> --}}
        <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
                    <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                        Already have an account?
                        <a class="text-primary decoration-2 hover:underline font-medium" href="{{ route('login') }}">
                            Sign in here
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <!-- <button type="button"
                                    class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                    <img src="../assets/img/authentication/social/1.png" class="w-4 h-4" alt="google-img">Sign in with
                                    Google
                                </button> -->
                    <!--
                                <div
                                    class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
                                    Or</div> -->

                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="grid gap-y-4">

                            <!-- Form Group -->
                            <div>
                                <label class="block text-sm mb-2 dark:text-white">Name</label>
                                <div class="relative">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required="">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <label class="block text-sm mb-2 dark:text-white">Email address</label>
                                <div class="relative">
                                    <input type="email" name="email" id="email"
                                        class="  @error('email') is-invalid @enderror py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required="">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password"
                                        class=" @error('password') is-invalid @enderror py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required="">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <label for="confirm-password" class="block text-sm mb-2 dark:text-white">Confirm
                                    Password</label>
                                <div class="relative">
                                    <input id="password-confirm" type="password" name="password_confirmation"
                                        class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required="">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            <!-- <div class="flex items-center">
                                            <div class="flex">
                                                <input id="remember-me" name="remember-me" type="checkbox"
                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <label for="remember-me" class="text-sm dark:text-white">I accept the <a
                                                        class="text-primary decoration-2 hover:underline font-medium"
                                                        href="terms.html">Terms and Conditions</a></label>
                                            </div>
                                        </div> -->
                            <!-- End Checkbox -->

                            <button type="submit"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                up</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </main>
@endsection
