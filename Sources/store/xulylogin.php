<?php
    if(isset($_REQUEST["tuser"])==false)
    {   
        die();
    }

    $user = $_REQUEST["tuser"];
    $pass = $_REQUEST["tpass"];
    $pass = md5($pass);

    

?>