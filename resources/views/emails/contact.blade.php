<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }} &nbsp;&nbsp; <strong>Phone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $details['subject'] }}</p> <br>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>
</body>
</html>