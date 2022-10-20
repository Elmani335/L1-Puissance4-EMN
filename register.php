<?php
include_once 'assets/php/loginsyst/register.php';
include_once 'assets/includes/header.php';
?>

    <link href="assets/css/indexcss/register.css" rel="stylesheet">
        <div class="titre-contacter">
            <h1 class="animate-headtext">INSCRIPTION</h1>
        </div>



<body>
<div class="register_wrapper">

    <span class="invalid-feedback-user"><?php echo $username_err; ?></span>
    <span class="invalid-feedback-pass"><?php echo $password_err; ?></span>
    <span class="invalid-feedback-conpass"><?php echo $confirm_password_err; ?></span>

    <h2>Sign Up</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label id="labeluser">Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" id="formuser">

        </div>
        <div class="form-group">
            <label id="labelpass">Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" id="formpass">

        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">

        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</div>
</body>

</html>

<?php
include_once 'assets/includes/footer.php';
?>