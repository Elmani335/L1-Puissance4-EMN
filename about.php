<?php

include_once 'assets/php/loginsyst/login.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="assets/css/indexcss/header.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/indexcss/footer.css">
    <link rel="stylesheet" href="assets/css/indexcss/1.css">
    <link rel="stylesheet" href="assets/css/indexcss/login.css">
    <link rel="stylesheet" href="assets/css/indexcss/scores.css">
    <title>Scores</title>
</head>
<body>
<header>
    <div class="header">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="MyPage.php">Inscription</a></li>
                    <li class="active"><a href="about.php">Login</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="jeu.php">Jeu</a></li>
                    <li><a href="scores.php">Scores</a></li>
                    <li><a href="chat.php">Chat</a></li>
                </ul>
            </nav>

        </div>
</div>
</header>

<div class="wrapper">
    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>

    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="MyPage.php">Sign up now</a>.</p>
    </form>
</div>
</div>


<footer class="global">

    <div class="row">

        <div class="col">
            <h1>Informations</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <p class="pcol"><strong>Tel :</strong> 0678697969</p>
            <p class="pcol"><strong>Email :</strong> unEmail@email.com</p>
            <p class="pcol"><strong>Localisation :</strong> Quelquepart</p>
            <a href=""> <i class='bx bxl-facebook-square'></i></a>
            <a href=""> <i class='bx bxl-instagram'></i></a>
            <a href=""> <i class='bx bxl-google'></i></a>
            <a href=""> <i class='bx bxl-pinterest'></i></a>
            <a href=""> <i class='bx bxl-twitter'></i></a>
            <p class="copy">Copyright @ tout droits réservés</p>
        </div>

        <div class="col2">
            <h1>Power Of Memory</h1>
            <ul>
                <li>
                    <a href="" class="footer_link">Jouer ! </a>
                </li>
                <li>
                    <a href="scores.html" class="footer_link">Les scores</a>
                </li>
                <li>
                    <a href="contact.php" class="footer_link">Nous contacter</a>
                </li>
            </ul>
        </div>

    </div>

</footer>

</body>
</html>