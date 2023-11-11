<?php

// Load Composer autoloader
require realpath(__DIR__ . '/../vendor/autoload.php');

// Load CodeIgniter
require realpath(__DIR__ . '/index.php');

// Instantiate the Navbar controller
$navbar = new \App\Controllers\Navbar();

// Call the displayNavbar method and echo the output
echo $navbar->displayNavbar();
