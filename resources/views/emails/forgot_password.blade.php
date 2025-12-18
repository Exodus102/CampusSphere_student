<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif;">
    <h2>CampusSphere Password Reset</h2>
    <p>Hello {{ $student->student_number }},</p>
    <p>You requested a password reset. Click the link below to reset your password:</p>
    <p>
        <a href="{{ url('/login') }}">Login to CampusSphere</a>
    </p>
    <p>If you did not request this, please ignore this email.</p>
    <p>Best regards,<br>CampusSphere Team</p>
</body>
</html>
