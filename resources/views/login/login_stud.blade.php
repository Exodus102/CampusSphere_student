<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Student Login</title>

   
</head>
<body>
    <div class="login-container">
       <div class="logo-area">
    <img src="{{ asset('images/campus_logo.png') }}" alt="CampusSphere Logo" class="logo-img">
</div>


        <div class="header-text">
            <h2>Welcome back!</h2>
            <p>Enter your credentials to continue.</p>
        </div>

        <form method="POST" action="">
            @csrf

            <div class="input-group">
                <label for="student_id">Student ID Number</label>
                <input type="text" id="student_id" name="student_id" required autofocus>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <i class="fas fa-eye-slash toggle-password" onclick="togglePassword()"></i>
            </div>

            <div class="forgot-pass">
    <a href="{{ route('password.request') }}">Forgot Password?</a>
</div>


            <button type="submit" class="btn-primary">Login</button>

            <div class="register-link">
                First Time Login? <a href="">Get Your Account Here</a>
            </div>
        </form>

        <div class="copyright">
            &copy; 2025 CampusSphere. All rights reserved. | Privacy
        </div>
    </div>

    <div class="hero-container">
    <div class="hero-content">

        <div class="hero-slide active">
            <div class="hero-image">
                <img src="{{ asset('images/1.png') }}" alt="Teacher Illustration" class="slide-img">
            </div>
            <h1>Welcome to CampusSphere!</h1>
            <p>
                Begin your CampusSphere journey! Simplify your organization tasks,
                access key tools, and manage activities in one platform.
            </p>
        </div>

        <div class="hero-slide">
            <div class="hero-image">
                <img src="{{ asset('images/2.png') }}" alt="Connected Illustration" class="slide-img">
            </div>
            <h1>Stay Connected</h1>
            <p>
                Keep track of announcements, collaborate with your organization, and communicate seamlessly within CampusSphere.
            </p>
        </div>

        <div class="hero-slide">
            <div class="hero-image">
                <img src="{{ asset('images/3.png') }}" alt="Growth Illustration" class="slide-img">
            </div>
            <h1>Grow Your Organization</h1>
            <p>
                Track your activities, and accomplishments to see how your organization evolves.
            </p>
        </div>

        <div class="carousel-dots" id="carouselDots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>
</div>

    <script src="{{ asset('js/login.js') }}"></script>
   
</body>

</html>