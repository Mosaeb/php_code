<?php
require_once 'vendor/autoload.php';
use App\classes\HomeController;
$home = new \App\classes\Home();
$home->index();