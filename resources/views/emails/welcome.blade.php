<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>

<body>
    <h2>Welcome to Our Application</h2>
    <p>Welcome to our application! We're excited to have you on board.</p>
    <p>Please click the following link to verify your email:</p>
    <p><a href="{{ route('verify-email', ['token' => $emailVerificationToken]) }}">Click Here To Verify</a></p>



    <p>Thank you!</p>
</body>

</html>