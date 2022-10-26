<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="assets/css/indexcss/former.css">
</head>
<body>
<div class="contact-container">
<form action="former.php" method="post">
    <input class="name" type="text" name="name" placeholder="Name" required>
    <div id="nameerr"></div>
    <input class="phone" type="tel" name="phone" placeholder="Phone" maxlength="10" required>
    <div id="phoneerr"></div>
    <input class="email" type="email" name="email" placeholder="email">
    <div id="emailerr"></div>

    <fieldset>
        <legend>Select prefered transport method :</legend>
        <div>
            <input type="radio" class="radio"
                   name="contact" value="taxi">
            <label for="contactChoice1">Taxi</label>

            <input type="radio" class="radio"
                   name="contact" value="jet">
            <label for="contactChoice2">Avion de chasse</label>

            <input type="radio" class="radio"
                   name="contact" value="sub">
            <label for="contactChoice3">Sous-marin</label>
        </div>
    </fieldset>

    <button class="button" type="button">Submit</button>
</form>
</div>

<div id="error"></div>

<script src="assets/js/former.js"></script>
</body>
</html>
