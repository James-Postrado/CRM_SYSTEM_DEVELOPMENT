<?php
    require("funcs.php");

    session_start();
    session_destroy();
    redirection("admin_login.php");
?>