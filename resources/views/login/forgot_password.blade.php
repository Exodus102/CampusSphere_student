<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="forgot-container">
        <div class="hero-container left-hero">
            <div class="hero-content">
                <img src="{{ asset('images/4.png') }}" alt="CampusSphere Logo" class="slide-img">
                <p>Recover access to your account quickly and securely. Follow the steps to regain access to CampusSphere.</p>
            </div>
        </div>

        <div class="login-container">
            <div class="form-logo">
                <img src="{{ asset('images/campus_logo.png') }}" alt="CampusSphere Logo">
            </div>
            <div class="header-text">
                <h2>Forgot Password</h2>
                <p>Make sure to input the email you're using in your CampusSphere account.</p>
            </div>

            <form method="POST" action="{{ route('forgot-password.submit') }}">
                @csrf

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
                    @if(session('email_error'))
                        <small style="color: red; display: block; margin-top: 5px;">
                            This email is not associated with any CampusSphere account. Please check and try again.
                        </small>
                    @endif
                </div>

                <button type="submit" class="btn-primary">
                    Send Reset Link
                </button>

                <div class="register-link">
                    Remembered your password? <a href="{{ route('login.login_stud') }}">Login here</a>
                </div>
            </form>
        </div>
    </div>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Email Sent!',
                text: 'Please check your email to reset your password.',
                confirmButtonColor: '#002D62'
            });
        </script>
    @endif

</body>
</html>
