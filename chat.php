<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="assets/css/indexcss/header.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/indexcss/footer.css">
    <link rel="stylesheet" href="assets/css/indexcss/1.css">
    <link rel="stylesheet" href="assets/php/chat.css">

    <title>Chat</title>

</head>
<body>

<div class="main">
    <header>
        <div class="header">
            <div class="menu">
                <nav>
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="MyPage.php">Inscription</a></li>
                        <li><a href="about.php">Login</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="jeu.php">Jeu</a></li>
                        <li><a href="scores.php">Scores</a></li>
                        <li class="active"><a href="chat.html">Chat</a></li>
                    </ul>
                </nav>
            </div>
            <div>
                <div class="container">
                    <h3 class="animate-headtext">CHAT</h3>
                </div>
                <div>

                </div>
            </div>
        </div>
    </header>
</div>

<div class="chat">
    <div id="wrapperchat">
        <div id="menuchat">
            <p class="welcome">Welcome, <b></b></p>
            <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        </div>

        <div id="chatbox"></div>

        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" />
            <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
        </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        // jQuery Document
        $(document).ready(function () {});
    </script>

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