@extends('layouts.app')

@section('content')
    <main id="content" class="w-full max-w-md mx-auto p-6">
        {{-- <a href="index.html" class="header-logo">
            <img src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto block dark:hidden">
            <img src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto hidden dark:block">
        </a> --}}
        <div class="mt-14 bg-white rounded-sm shadow-sm dark:bg-bgdark">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                    <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                        Don't have an account yet?
                        <a class="text-primary decoration-2 hover:underline font-medium" href="{{ route('register') }}">
                            Sign up here
                        </a>
                    </p>
                </div>

                <div class="mt-5">

                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <div class="grid gap-y-4">
                                <!-- Form Group -->
                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                    <div class="relative">
                                        <input id="email" type="email" name="email"
                                            class="@error('email') is-invalid @enderror  py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
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
                                    <div class="flex justify-between items-center">
                                        <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                        {{-- <a class="text-sm text-primary decoration-2 hover:underline font-medium"
                                        href="forgot.html">Forgot password?</a> --}}
                                    </div>
                                    <div class="relative">
                                        <input id="password" type="password" name="password"
                                            class=" @error('password') is-invalid @enderror  py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required="">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <button type="submit"
                                    class="ti-btn bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10">
                                    Sign in
                                </button>

                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </main>
@endsection
