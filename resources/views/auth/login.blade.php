@extends('adminLayouts.layout')

@section('admin-title')
    Login
@endsection

@section('main-admin-content')
<div class="login-page">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card admin-form">
                    <div class="card-header">
                        <h5 class="text-uppercase text-center p-0 m-0">Admin Dashboard</h5>
                    </div>

                    <div class="card-body">
                        @if (session()->has('login_error'))
                        <div class="alert alert-danger">
                            {{ session()->get('login_error') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ url('/admin/handle_login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-7">
                                    <input id="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <a id="showPassword">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-7">
                                    <input type="checkbox" id="showPassword">
                                    <label>Show Password</label>
                                </div>
                            </div> --}}

                            {{-- <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-success btn-sm btn-flat">
                                        Login
                                    </button>

                                    <br>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-js')
    <script>
        let passInp = document.getElementById('password');
        $('#showPassword').on('click', () => {
            passInp.type = passInp.type == 'password' ? 'text' : 'password';
        });
    </script>
@endsection
