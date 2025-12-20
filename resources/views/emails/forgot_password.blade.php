<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif;">
    <h2>CampusSphere Password Reset</h2>

    <p>Hello {{ $student->student_number }},</p>

    <p>You requested a password reset. Click the link below to create a new password:</p>

    <p>
        <a href="{{ route('password.reset') }}"
           style="background:#002D62;color:#fff;padding:10px 16px;
                  text-decoration:none;border-radius:6px;">
            Reset Password
        </a>
    </p>

    <p>If you did not request this, please ignore this email.</p>

    <p>Best regards,<br>CampusSphere Team</p>
</body>
</html>
