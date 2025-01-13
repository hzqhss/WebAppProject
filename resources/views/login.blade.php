<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EazyMakan - Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #001F3F;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .main-container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            height: 600px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .image-container {
            flex: 1;
            background: url('/assets/img/EazyMakan.png') no-repeat center center / cover;
        }

        .form-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            background-color: #001F3F;
            color: #fff;
        }

        .form-container h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .form-container h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-container form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .social-login button {
            flex: 1;
            padding: 10px;
            font-size: 14px;
            margin-right: 10px;
            background: none;
            border: 1px solid #fff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .social-login button:last-child {
            margin-right: 0;
        }

        .social-login button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
            color: #fff;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;8
            background: #fff;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .bottom-text {
            text-align: center;
            margin-top: 20px;
        }

        .bottom-text a {
            color: #007bff;
            text-decoration: none;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="image-container"></div>
        <div class="form-container">
            <h1>EazyMakan</h1>
            <h2>Create Account</h2>

            <div class="social-login">
                <button>Sign up with Google</button>
                <button>Sign up with Facebook</button>
            </div>

            <div class="divider">- OR -</div>

            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Type Your Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Type Your Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Type Your Password" required>
                </div>
                <button type="submit">Create Account</button>
            </form>

            <div class="bottom-text">
                <p>Already have an account? <a href="/login">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
