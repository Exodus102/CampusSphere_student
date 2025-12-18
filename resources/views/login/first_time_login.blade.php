<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Time Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="forgot-container">


        <div class="hero-container left-hero">
            <div class="hero-content">
                <img src="{{ asset('images/5.png') }}" alt="CampusSphere" class="slide-img">
                <p>Secured. Verified. Ready to connect.</p>
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

            <form method="POST" action="{{ route('first-time-login.submit') }}">

                @csrf

                <div class="input-group">
                    <label for="student_number">Student ID Number</label>
                    <input type="text" name="student_number" id="student_number" required autofocus>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required>
                    <small class="helper-text">
                        Your request will be sent for verification. You’ll receive your login credentials via email once
                        approved.
                    </small>
                </div>

                <button type="submit" class="btn-primary"
                    onclick="this.disabled=true; this.innerText='Processing...'; this.form.submit();">
                    Submit
                </button>

                <div class="register-link">
                    Already activated?
                    <a href="{{ route('login.login_stud') }}">Login here</a>
                </div>
            </form>

        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('error'))
                Swal.fire({
                    icon: 'warning',
                    iconColor: '#b0c4de',
                    title: '<span style="color: #002D62; font-weight: 800;">STUDENT ID NUMBER NOT FOUND!</span>',
                    html: `
                    <div style="color: #5d76a9; font-size: 15px; line-height: 1.5; padding: 0 10px;">
                        Your credentials do not match any records in the system. 
                        If you are a current enrolled student and believe this is an error, 
                        please contact or visit the registrar’s office to update your records.
                    </div>
                `,
                    showConfirmButton: false,
                    showCloseButton: true,
                    width: '500px',
                    padding: '3em',
                    background: '#F7FAFF'
                });
            @endif

            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Credentials Sent',
                    html: 'Your login credentials have been sent to your email. <br>Check your inbox to continue.',
                    confirmButtonColor: '#002D62'
                });
            @endif

            @if(session('already_activated'))
                Swal.fire({
                    icon: 'info',
                    iconColor: '#b0c4de',
                    title: 'Already Activated',
                    text: 'This account has already been activated. Please log in instead.',
                    confirmButtonColor: '#002D62',
                    background: '#F7FAFF'

                });
            @endif
});
    </script>

</body>

</html>