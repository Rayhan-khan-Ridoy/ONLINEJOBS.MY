<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your OTP Code</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #ffffff; color: #333333; padding: 20px; line-height: 1.6;">

    <p style="margin-bottom: 20px;">Dear User,</p>

    <p style="margin-bottom: 20px;">
        Thank you for creating an account with <strong>{{ config('app.name') }}</strong>.
    </p>

    <p style="margin-bottom: 10px;"><strong>Your One-Time Password (OTP) is:</strong></p>
    <p style="font-size: 24px; font-weight: bold; letter-spacing: 4px; margin-bottom: 30px; color: #2c3e50;">
        {{ $otp }}
    </p>

    <p style="margin-bottom: 20px;">
        Please use this code to verify your account. The code will expire in <strong>10 minutes</strong>.
        If you did not request this code, no action is needed.
    </p>

    <p style="margin-bottom: 40px;">Best regards,<br>
        The {{ config('app.name') }} Team
    </p>

    <hr style="border: none; border-top: 1px solid #eee; margin-bottom: 10px;">
    <p style="font-size: 12px; color: #888888;">
        This is an automated message. Please do not reply to this email.
    </p>

</body>
</html>

