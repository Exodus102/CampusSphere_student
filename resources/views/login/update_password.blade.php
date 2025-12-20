<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="forgot-container">

      
        <div class="hero-container left-hero">
            <div class="hero-content">
                <img src="{{ asset('images/4.png') }}" alt="CampusSphere Logo" class="slide-img">
                <p>
                    Secure your account by creating a new password.  
                    Make sure it’s something only you know.
                </p>
            </div>
        </div>

        <div class="login-container">

            <div class="form-logo">
                <img src="{{ asset('images/campus_logo.png') }}" alt="CampusSphere Logo">
            </div>

            <div class="header-text">
                <h2>Create New Password</h2>
                <p>Please enter and confirm your new password.</p>
            </div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                
                <div class="input-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                
                <div class="input-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>

                    @if ($errors->has('password'))
                        <small style="color:red; display:block; margin-top:5px;">
                            {{ $errors->first('password') }}
                        </small>
                    @endif
                </div>

                <button type="submit" class="btn-primary">
                    Update Password
                </button>

                <div class="register-link">
                    Back to <a href="{{ route('login.login_stud') }}">Login</a>
                </div>

            </form>
        </div>

    </div>

  
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                 iconColor: '#b0c4de',
                title: 'Password Updated!',
                text: 'Your password has been successfully updated. You may now log in.',
                confirmButtonColor: '#002D62',
                background: '#F7FAFF'
            });
        </script>
    @endif

</body>
</html>
