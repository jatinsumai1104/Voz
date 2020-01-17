<?php

require_once(__DIR__.'/../../helper/constants.php');
class Util{

  public static function redirect($file){
    header("Location: ".BASEURL."$file");
  }


  public static function createAssocArray($arrayOfKeys,$post){
    $assoc_array;
    foreach($arrayOfKeys as $key){
        $assoc_array[$key] = $post[$key];
    }
    return $assoc_array;
}
}