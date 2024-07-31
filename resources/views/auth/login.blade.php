<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f4f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.container {
    background-color: white;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(159, 98, 7, 0.903);
    max-width: 400px;
    width: 100%;
}

span{
    color: #f17617;
}

h1 {
    font-size: 18px;
    text-align: center;
    margin-bottom: 10px;
}
p {
    text-align: center;
    font-size: 14px;
    margin-bottom: 20px;
}
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
}
.form-group input[type="email"],
.form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.form-group input[type="checkbox"] {
    margin-right: 10px;
}
.form-group a {
    font-size: 12px;
    color: #007bff;
    text-decoration: none;
    float: right;
}
.form-group a:hover {
    text-decoration: underline;
}
.form-group button {
    width: 100%;
    padding: 10px;
    background-color: #ff8c00;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}
.signup-link {
    text-align: center;
    margin-top: 20px;
}
.signup-link a {
    color: #ff6600;
    text-decoration: none;
}
.signup-link a:hover {
    text-decoration: underline;
}
.error {
    color: red;
    text-align: center;
    margin-top: 10px;
}
    </style>

    <script>
        // JavaScript function to validate the form
function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');
    
    // Clear previous error message
    errorMessage.textContent = '';

    // Check if email is valid
    if (!validateEmail(email)) {
        errorMessage.textContent = 'Invalid email address';
        return false;
    }

    // Check if password meets criteria (for example, minimum 6 characters)
    if (password.length < 6) {
        errorMessage.textContent = 'Password must be at least 6 characters long';
        return false;
    }

    // If everything is correct, redirect to the site
    <a href="/"></a>;
    return false;
}

// Function to validate email format
function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

    </script>

</head>
<body>
<div class="container">
    <h1>Bienvenu chez <span>EventFlow</span></h1>
    <p>Veuillez remplir le formulaire pour vous connecter à votre espace personnel</p>
    <form id="loginForm" action="{{ route('login') }}" method="POST" onsubmit="return validateForm()">
        @csrf
        <div class="form-group">
            <label for="email">Email address / Adresse email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password / Mot de passe</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-group">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="form-group">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="form-group">
             <button type="submit">Login / Se connecter</button>
        </div>
        <div id="error-message" class="error"></div>
    </form>
    <div class="signup-link">
        Vous n'avez pas de compte? <a href="{{ route('register') }}">Créer un compte</a>
    </div>
</body>
</html>