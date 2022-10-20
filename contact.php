<?php
include_once 'assets/includes/header.php';
?>

<body>
    <div class="titre-contacter">
        <h1 class="animate-headtext">NOUS CONTACTER</h1>
    </div>
    <div class="contact-container">

        <div class="container-contact">
            <div class="case-contact1">
                <a href=""><i class='bx bx-phone'></i></a>
                <p>06 66 77 88 99</p>
            </div>
            <div class="case-contact2">
                <a href=""><i class='bx bx-mail-send' ></i></a>
                <p>Support@bestdev.com</p>
            </div>
            <div class="case-contact3">
                <a href=""><i class='bx bx-location-plus' ></i></a>
                <p>Paris</p>
            </div>
        </div>

        <div class="contact-formulaire">

            <form action="post">
                <input type="text" placeholder="Nom :" id="formulaire-nom" class="input-basic">
                <input type="email" placeholder="Email :" id="formulaire-email" class="input-basic">
                <input type="text" placeholder="Sujet :" id="formulaire-sujet" class="input-basic">
                <label for="">
                    <textarea class="input-basic"placeholder="Message"></textarea>
                </label>
                <input type="submit"" id="">
            </form>
        </div>
    </div>
</body>
</html>

<?php
include_once 'assets/includes/footer.php';
?>