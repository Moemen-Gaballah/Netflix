<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Welcome to Reeceflix!</title>
    <link rel="stylesheet" type="text/css" href="frontend/style/style.css" />
</head>
<body>
    <div class="signInContainer">
    <div class="column">
        <div class="header">
        <img src="frontend/images/logo.png" title="Logo" alt="Site logo">
        <h3>Sign In</h3>
        <span>to continue to Reeceflix</span>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

        <input type="email" style="@error('email') border:1px solid #dc3545 @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submitButton" value="SUBMIT">
        </form>
        <a href="{{ route('register') }}" class="signInMessage">Need an account? Sign in here</a>
    </div>
    </div>
</body>
</html>

