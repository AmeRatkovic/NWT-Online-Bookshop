<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Please confirm your email address</h2>
<div>
    Thank you for registering on our Bookshop website.
    Click the link below for email confirmation.
    {{ URL::to('register/confirmation/' . $konfirmacijski_kod) }}.<br/>

</div>
</body>
</html>