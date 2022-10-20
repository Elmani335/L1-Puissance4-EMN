<?php

include_once 'assets/php/loginsyst/login.php';
include_once 'assets/includes/header.php';

?>

<body>
<link href="assets/css/indexcss/login.css" rel="stylesheet">
<div>
    <div class="container">
        <h3 class="animate-headtext">LOGIN</h3>
    </div>
</div>

<div class="login_wrapper">
    <p class="txtfillin">Please fill in your credentials to login.</p>

    <?php
    if(!empty($login_err)){
        echo '<div class="alert-danger">' . $login_err . '</div>';
    }
    ?>
    <span class="invalid-feedback-user"><?php echo $username_err; ?></span>
    <span class="invalid-feedback-pass"><?php echo $password_err; ?></span>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label id="labeluser">Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" id="formuser">

        </div>
        <div class="form-password">
            <label id="labelpass">Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="formpass">
            <br>

        </div>
        <div class="form-submit">
            <input type="submit" class="btn btn-primary" value="LOGIN" id="subbtn">
        </div>
        <div class="signup">
        <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </div>
    </form>
</div>
</div>

</body>
</html>

<?php
include_once 'assets/includes/footer.php';
?>