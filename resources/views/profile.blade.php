<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <div class="profile">
            <img src="{{ asset('images/default-profile.png') }}" alt="Profile Picture" class="profile-pic">
            <h2>{{ $user->username }}</h2>
            @if (session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            <form method="POST" action="{{ route('profile') }}">
                @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}" required>
                
                <label for="phone">Phone No</label>
                <input type="text" id="phone" name="phone" value="{{ $user->phone }}">
                
                <label for="address">Address</label>
                <textarea id="address" name="address">{{ $user->address }}</textarea>
                
                <button type="submit">Save Changes</button>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
