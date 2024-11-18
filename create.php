<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Florian Peto | Inscription</title>
</head>
<body>
<form action="add.php" method="post">
    <div class="form-box">
        <div class="register-container" id="register">
            <div class="top">
                <span>Vous avez un compte? <a href="#" onclick="login()">Connectez-vous</a></span>
                <header>Inscrivez-vous</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="nom" placeholder="Nom">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="prenom" placeholder="Prenom">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="email" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="mot_de_passe" placeholder="Mot de passe">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Valider">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check" name="remember_me">
                    <label for="register-check"> Se rappeler de moi</label>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>

</body>
</html>
