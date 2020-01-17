<?php

require_once ("init.php");

if(isset($_POST["voice_text"])){
    var_dump($_POST);
    $res = $di->get("Patient")->getPatientFromVoice($_POST);
    if(count($res) > 1){
        SESSION::setSession("voice_text", $_POST["voice_text"]);
        Util::redirect("list_patients");
    }else if(count($res) == 1){
        Util::redirect("prescription_history/{$res[0]['id']}");
    }else{
        Util::redirect("register_patient");
    }
}

if(isset($_POST["patient_register_through_doctor"])){
    $di->get("Patient")->registerHalfPatient($_POST);
}
if(isset($_POST['login_submit'])){
    $di->get('Auth')->login($_POST);    
}