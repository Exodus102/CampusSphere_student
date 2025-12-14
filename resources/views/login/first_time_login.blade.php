<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Time Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="forgot-container">


        <div class="hero-container left-hero">
            <div class="hero-content">
                <img src="{{ asset('images/5.png') }}" alt="CampusSphere" class="slide-img">

                <p>
                    Secured. Verified. Ready to connect.
                </p>
            </div>
             <div class="copyright">
            &copy; 2025 CampusSphere. All rights reserved. | Privacy
        </div>
        </div>


        <div class="login-container">

            <div class="form-logo">
                <img src="{{ asset('images/campus_logo.png') }}" alt="CampusSphere Logo">
            </div>

            <div class="header-text">
                <h2>First Time Logging In?</h2>
                <p>
                    Enter your Student ID number and email to receive your login credentials.
                </p>
            </div>

            <form method="POST" action="">
                @csrf


                <div class="input-group">
                    <label for="student_number">Student ID Number</label>
                    <input type="text" name="student_number" id="student_number" required autofocus>


                    {{-- <small class="error-text">Student number not found.</small> --}}
                </div>


                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required>
                    <small class="helper-text">
                        Your request will be sent for verification. You’ll receive your login credentials via email once
                        approved.
                    </small>


                    {{-- <small class="error-text">Email not associated with CampusSphere.</small> --}}
                </div>

                <button type="submit" class="btn-primary">
                    Submit
                </button>

                <div class="register-link">
                    Already activated?
                    <a href="{{ route('login.login_stud') }}">Login here</a>
                </div>
            </form>


        </div>

    </div>

</body>

</html>