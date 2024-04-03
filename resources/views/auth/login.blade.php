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
                    <h3 class="account-title">Login</h3>
                    <p class="account-subtitle">Access to our dashboard</p>
                    <!-- Account Form -->

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- EMAIL INPUT -->
                        <div class="form-group">
                            <label>Email</label>
                            <input id="emailInput" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                            <span id="emailError" class="invalid-feedback" role="alert" style="display: none;">
                                <strong>Please enter your email with correct format</strong>
                            </span>
                            <span id="emailError2" class="invalid-feedback" role="alert" style="display: none;">
                                <strong>Email is required</strong>
                            </span>
                            @error('email')
                            <script>
                                document.getElementById('emailError2').style.display = 'block';
                                document.getElementById('emailError').style.display = 'none';
                            </script>
                            @enderror
                        </div>
                        <!-- PASSWORD-INPUT -->
                        <div class="form-group">
                            <label>Password</label>
                            <div class="password_container">
                                <input id="password-input" type="password" class="form-control @error('password') invalid-input @enderror" name="password" placeholder="Enter Password">
                                <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="fa-regular fa-eye"></i></span>
                            </div>
                            <div>
                                <span id="passwordError" class="invalid-feedback" role="alert" style="display: none;">
                                    <strong>Password is required</strong>
                                </span>
                                <span id="passwordError2" class="invalid-feedback" role="alert" style="display: none;">
                                    <strong>Password is required</strong>
                                </span>
                                @error('password')
                                <script>
                                    document.getElementById('passwordError2').style.display = 'block';
                                    document.getElementById('passwordError').style.display = 'none';
                                </script>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label></label>
                                    </div>
                                    <div class="col-auto">
                                        <a class="text-muted" href="{{ route('forget-password') }}">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Login</button>
                            </div>
                            <div class="account-footer">
                                <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
                            </div>
                    </form>
                    <!-- /Account Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password-input");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    document.getElementById('emailInput').addEventListener('input', function() {
        var email = this.value.trim();
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var errorSpan = document.getElementById('emailError');

        if (email === '' || !regex.test(email)) {
            errorSpan.style.display = 'block';
        } else {
            errorSpan.style.display = 'none';
        }
    });


    document.getElementById('password-input').addEventListener('input', function() {
        var password = this.value.trim();
        var errorSpan = document.getElementById('passwordError');

        if (password === '') {
            errorSpan.style.display = 'block';
        } else {
            errorSpan.style.display = 'none';
        }
    });
</script>
@endsection