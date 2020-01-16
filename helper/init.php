<?php
session_start();

require_once(__DIR__."/requirements.php");

$di = new DependencyInjector();
$di->set("Database", new Database());
$di->set("Hash", new Hash($di));
$di->set("ErrorHandler", new ErrorHandler($di));
$di->set("Auth", new Auth($di));
// $di->set("TokenHandler", new TokenHandler($database, $hash));
$di->set("UserHelper", new UserHelper($di));
// $di->set("Mail", MailConfigHelper::getMailer());
$di->set("Validator", new Validator($di));

$di->set("Doctor",new Doctor($di));
<<<<<<< HEAD
$di->set("Patient",new Patient($di));
=======

>>>>>>> dfca3e3be62d2550df780e2ad6881c1d6c9aa1dd
// $tokenHandler->build();
