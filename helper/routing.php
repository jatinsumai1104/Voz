<?php

require_once ("init.php");

if(isset($_POST["voice_text"])){
    var_dump($_POST);
}

if(isset($_POST['login_submit'])){
    $di->get('Auth')->login($_POST);    
}