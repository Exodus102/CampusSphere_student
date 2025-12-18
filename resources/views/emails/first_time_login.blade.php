<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif">

    <h2>Welcome to CampusSphere!</h2>

    <p>Your account has been activated, and here are your login details:</p>

    <p><strong>Login Credentials:</strong></p>
    <p>
        Username: {{ $student->student_number }} <br>
        Temporary Password: <strong>{{ $password }}</strong>
    </p>

    <p>
        To ensure your account's security, please log in using the above credentials and change your password immediately.
    </p>

    <p>
        You can log in here: 
        <a href="{{ route('login.show') }}" target="_blank">
            {{ route('login.show') }}
        </a>
    </p>

    <p>Best,</p>
    <p>CampusSphere Team</p>

</body>
</html>
