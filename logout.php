<?php
    // if(isset[])
    session_destroy();
    $_SESSION['username']="";
    header('Location: login.php');
?>