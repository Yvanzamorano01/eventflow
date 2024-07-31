<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
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
.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="password"],
.form-group input[type="tel"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
/* .form-group input[type="checkbox"] {
    margin-right: 10px;
}
.form-group label[for="terms"] {
    display: inline-block;
    font-size: 14px;
} */
.form-group button {
    width: 100%;
    padding: 10px;
    background-color: #ff8c00;
    color: white;
    border-radius: 8px;
    border-color: #ff8c00;
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
#error-message {
    color: red;
    text-align: center;
    margin-top: 10px;
}
    </style>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent form submission

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('password_confirmation').value;
    var errorMessage = document.getElementById('error-message');

    // Regular expression for basic email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        errorMessage.textContent = "Please enter a valid email address!";
    } else if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match!";
    } else {
        errorMessage.textContent = "";
        // Handle form submission
        console.log('Form submitted successfully!');
        alert('Form submitted successfully!');
        // Redirect to site.html
        location.href = 'welcome.blade.php';
    }
});
    </script>
    
</head>
<body>
    <div class="container">
        <h1>Bienvenu chez <span>EventFlow</span></h1>
        <p>Veuillez remplir le formulaire pour crée votre compte 
            et accéder à votre espace personnel</p>
        <form id="loginForm" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" value="('Name')">Name / Noms</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email" value="('Email')">Email address / Adresse email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone" value="('phone')">Phone number / Numéro de Téléphone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password" value="('Password')">Password / Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation" value="('Confirm Password')">Confirm password / Confirmez le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="form-group">
                    <button type="submit">Submit / S'inscrire</button>
            </div>
        </form>
        <div class="signup-link">
            Vous avez déjà un compte? <a href="{{ route('login') }}">Connectez vous !</a>
        </div>
        <p id="error-message"></p>
    </div>
</body>
</html>