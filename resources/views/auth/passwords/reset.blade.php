@extends('layouts.app')
@section('content')
<div class="main-wrapper">
    <div class="account-content">
        <!-- <a href="{{ route('form/job/list') }}" class="btn btn-primary apply-btn">Apply Job</a> -->
        <div class="container">
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="index.html"><img src="https://cdn.haitrieu.com/wp-content/uploads/2021/09/Logo-DH-CONG-NGHE-THANH-PHO-HO-CHI-MINH-HUTECH.png" alt="SoengSouy"></a>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- /Account Logo -->
            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Reset Password</h3>
                    <!-- <p>Email: {{ session('reset_email') }}</p> -->
                    <!-- <p class="account-subtitle">Input your email to register reset new password.</p> -->
                    <!-- Account Form -->
                    <form method="POST" action="/reset-password">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- <div class="form-group">
                            <label>Email</label>
                            <input disabled type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" placeholder="Enter Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->
                        <div class="form-group" style="display:none ;">
                            <label>Email</label>
                            <input readonly type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ session('reset_email') }}" placeholder="Enter Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>8 ki tu 1 hoa 1 dac biet</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label><strong>Repeat Password</strong></label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                        </div>
                        <div class="account-footer">
                            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </form>
                    <!-- /Account Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection