@extends('layouts.app')

@section('content')
<div class="page_title_section">
    <div class="page_header">
        <div class="container">
            <div class="row">
                <!-- section_heading start -->
                <div class="col-lg-9 col-md-8 col-12 col-sm-7">
                    <h1>login</h1>
                </div>
                <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="{{ url('welcome') }}"> Home </a>&nbsp; / &nbsp; </li>
                            <li>login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login_wrapper jb_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="login_top_box jb_cover">
                    <div class="login_banner_wrapper">
                        <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                            <h1>OR</h1>
                        </div>
                    </div>
                    <div class="login_form_wrapper">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2>login</h2>
                            <div class="form-group icon_form comments_form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group icon_form comments_form">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="control__indicator"></span>
                                </label>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forget_password">Forgot Password</a>
                                @endif
                            </div>
                            <div class="btn_hover slider_btn jobs_btn_3 jb_cover mt-0">
                                <button type="submit" class="w-100 mb-2">login</button>
                            </div>
                            <div class="dont_have_account jb_cover">
                                <p>Don’t have an acount ? <a href="{{ route('register') }}">Sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
