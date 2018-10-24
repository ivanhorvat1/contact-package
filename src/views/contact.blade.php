<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, inital-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<h1>contact us anytime</h1>
<form action="{{ route('contact') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your name">
    <input type="email" name="email" placeholder="Your valid email">
    <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>