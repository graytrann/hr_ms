@extends('layouts.app')
@section('content')
<div class="main-wrapper">
    <div class="account-content">
        <a href="{{ route('form/job/list') }}" class="btn btn-primary apply-btn">Apply Job</a>
        <div class="container">
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="index.html"><img src="{{ URL::to('assets/img/logo2.png') }}" alt="SoengSouy"></a>
            </div>
            <!-- /Account Logo -->
            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Register</h3>
                    <p class="account-subtitle">Access to our dashboard</p>

                    <!-- Account Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nameInput" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                            <span id="nameError" class="invalid-feedback" role="alert" style="display: none;">
                                <strong>Please enter your name without contain special characters or numbers</strong>
                            </span>
                            <span id="nameError2" class="invalid-feedback" role="alert" style="display: none;">
                                <strong>The name field is required, and cannot contain special characters or numbers</strong>
                            </span>

                            @error('name')
                            <script>
                                document.getElementById('nameError2').style.display = 'block';
                                document.getElementById('nameError').style.display = 'none';
                            </script>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- insert defaults --}}
                        <input type="hidden" class="image" name="image" value="photo_defaults.jpg">
                        <div class="form-group">
                            <label class="col-form-label">Role Name</label>
                            <select class="select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                                <option selected disabled>-- Select Role Name --</option>
                                @foreach ($role as $name)
                                <option value="{{ $name->role_type }}">{{ $name->role_type }}</option>
                                @endforeach
                            </select>
                            @error('role_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="password_container">
                                <input id="password-input" type="password" class="form-control @error('password') invalid-input @enderror" name="password" placeholder="Enter Password">
                                <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="fa-regular fa-eye"></i></span>
                            </div>
                            <div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Requires 8 characters, 1 uppercase letter, 1 special character</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <div class="password_container">
                                <input id="passwordrepeat-input" type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password">
                                <span class="toggle-password" onclick="togglePasswordRepeatVisibility()"><i class="fa-regular fa-eye"></i></span>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn mt-5" type="submit">Register</button>
                            </div>
                        </div>
                        <div class="account-footer">
                            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                        </div>
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

    function togglePasswordRepeatVisibility() {
        var passwordrepeatInput = document.getElementById("passwordrepeat-input");
        if (passwordrepeatInput.type === "password") {
            passwordrepeatInput.type = "text";
        } else {
            passwordrepeatInput.type = "password";
        }
    }

    // VALIDATE-NAME 
    document.getElementById('nameInput').addEventListener('input', function() {
        var name = this.value.trim();
        var regex = /^[^\d]+$/; // Kiểm tra xem có chứa số không
        var errorSpan = document.getElementById('nameError');

        if (name === '' || !regex.test(name)) {
            errorSpan.style.display = 'block'; // Hiển thị thông báo lỗi nếu có lỗi
        } else {
            errorSpan.style.display = 'none'; // Ẩn thông báo lỗi khi không có lỗi
        }
    });
</script>
@endsection