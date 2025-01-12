<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>EazyMakan</h1>
        <h2>Login</h2>
        @if ($errors->any())
            <p style="color: red;">{{ $errors->first('email') }}</p>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Type Your Email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Type Your Password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
