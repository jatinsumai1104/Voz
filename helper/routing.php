<?php

// require_once ("init.php");

if(isset($_POST["voice_text"])){
    var_dump($_POST);
}

if(isset($_POST["patient_register_through_doctor"])){
    $dataURL = $_POST["image"];
    $dataURL = str_replace('data:image/png;base64,', '', $dataURL);
    $dataURL = str_replace(' ', '+', $dataURL);
    $_POST['image'] = base64_decode($dataURL);
}