<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EazyMakan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header class="logo">
            <h1>EazyMakan</h1>
            <p>Where Hunger Meets Simplicity</p>
        </header>

        <section class="login-form">
            <h2>Login</h2>

            @if ($errors->any())
                <div class="error-message">
                    <p style="color: red;">{{ $errors->first('email') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Type Your Email" 
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Type Your Password" 
                        required>
                </div>


                <div class="form-group">
                    <button type="submit" class="submit-button">Login</button>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
