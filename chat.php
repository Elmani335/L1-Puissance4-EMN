<?php
include_once 'assets/includes/header.php';
?>
    <link href="assets/css/indexcss/chat.css" rel="stylesheet">
<div>
    <div class="container">
        <h3 class="animate-headtext">CHAT</h3>
    </div>
</div>

<div class="chat">
    <div id="wrapperchat">
        <div id="menuchat">
            <p class="welcome"><strong> WELCOME </strong><b></b></p>
            <p class="logout"><a id="exit" href="index.php">EXIT CHAT</a></p>
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

</body>
</html>

<?php
include_once 'assets/includes/footer.php';
?>