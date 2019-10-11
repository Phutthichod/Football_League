<?php
// echo "pinto";
require 'config.php';

// database
require 'app/Database.php'; 

// Use an autoloader!
require 'route/MVCmanage.php';
require 'app/Controller.php';
require 'app/Model.php';
// require 'app/View.php';




$bootstrap = new MVCmanage();
$bootstrap->init();
