<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="forgot-container">


        <div class="hero-container left-hero">
            <div class="hero-content">
                <img src="{{ asset('images/4.png') }}" alt="CampusSphere Logo" class="slide-img">

                <p>Recover access to your account quicly and securely. Follow the steps to regain access to
                    CampusSphere.</p>
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

            <form method="POST" action="">
                @csrf

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required autofocus>
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

</body>

</html>