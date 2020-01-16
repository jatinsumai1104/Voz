<?php
require_once(__DIR__.'/../../helper/constants.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Voz Prescription</title>
    <link rel="icon" href="<?php echo BASEASSETS;?>img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEASSETS;?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/slick.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>vendor/date-picker/datepicker.css">
    <!-- File Input CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>vendor/file-input/css/fileinput.min.css">
    <!-- ChartJs CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>vendor/chart-js/Chart.min.js">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEASSETS;?>css/custom.css">
</head>

<body>
    <form action="<?php echo BASEURL?>helper/routing.php" id="general_voice_input" method="POST">
        <input type="hidden" name="voice_text" id="voice_text">
        <button type="submit" class="btn btn-voice-input" name="voice_input">
            <i class="fa fa-microphone"></i>
        </button>
    </form>
