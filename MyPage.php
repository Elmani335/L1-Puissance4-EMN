<?php
include_once 'assets/php/loginsyst/register.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/indexcss/footer.css">
    <link rel="stylesheet" href="assets/css/indexcss/1.css">
    <link rel="stylesheet" href="assets/css/indexcss/contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/indexcss/header.css">
    <link rel="stylesheet" href="assets/css/indexcss/mypage.css">
    <meta charset="UTF-8">
    <title>MyPage</title>
</head>
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

        <div class="titre-contacter">
            <h1 class="animate-headtext">INSCRIPTION</h1>
        </div>
<body>
<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
        </div>
        <p>Already have an account? <a href="about.php">Login here</a>.</p>
    </form>
</div>
</body>
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
                                    <a href="scores.php" class="footer_link">Les scores</a>
                                </li>
                                <li>
                                    <a href="contact.php" class="footer_link">Nous contacter</a>
                                </li>
                            </ul>
                </div> 
              
            </div>
        
        </footer>

</html>