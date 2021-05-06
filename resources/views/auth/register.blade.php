<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Register || Netflix!</title>
    <link rel="stylesheet" type="text/css" href="frontend/style/style.css" />
</head>

<body>
    <div class="signInContainer">
    
    <div class="column">
        
        <div class="header">
        <img src="frontend/images/logo.png" title="Logo" alt="Site logo">
        <h3>Sign Up</h3>
        <span>to continue to Reeceflix</span>
        </div>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <input type="text" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>
         @error('firstName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        
        <input type="text" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}" required>
         @error('lastName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="email" name="email_confirmation" placeholder="Confirm email" value="{{ old('email_confirmation') }}" required>
    
        <input type="password" name="password" placeholder="Password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="password" name="password_confirmation" placeholder="Confirm password" required>

        <input type="submit" name="submitButton" value="SUBMIT">
        </form>
        <a href="{{ route('login') }}" class="signInMessage">Already have an account? Sign in here!</a>
    </div>

    </div>
</body>
</html>