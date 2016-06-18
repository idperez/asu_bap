<?php require_once("../includes/functions/sessions.php"); ?>
<?php require_once("../includes/functions/functions.php"); ?>

<?php
    $_SESSION["id"] = null;
    $_SESSION["username"] = null;
    $_SESSION["firstname"] = null;
    $_SESSION["lastname"] = null;
    $_SESSION["email"] = null;
    
    session_destroy();
    
    redirect_to("login.php");