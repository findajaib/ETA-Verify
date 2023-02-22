{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('auth_base')
@section('content')
    <div class="wrapper">
        <div class="login-box ">
            <div class="login-logo">

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="#" class="h3">
                                <b>ETA-Verify
                                </b></a>
                            <p>Password Forgot Request</p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info', 'message'] as $msg)
                                @if (Session::has($msg))
                                    <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                        {{ Session::get($msg) }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Enter Your Email To Request</p>
                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class=" form-group">
                                    Enter Your E-mail
                                    <div class="input-group">

                                        <input type="text" id="email" name="email" required="required"
                                            class="form-control" placeholder="enter Your Email">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>

                                    @if (Session::has('email'))
                                        <span class="small text-danger">{{ Session::get('email') }}</span>
                                    @endif
                                    <br />
                                    <button type="submit" class="btn btn-info btn-block my-2">Request new
                                        password</button>
                                    <br />
                                    <div class=" float-right">

                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-hand-point-right mt-3"></i>
                                            Login</a>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            @endsection
