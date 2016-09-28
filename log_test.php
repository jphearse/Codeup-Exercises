<?php 
require_once 'Log.php';

$instance = new Log('cli');

// $instance->filename = "log-". date('Y-m-d') . '.log';
$instance->info("User logged in successfully");
$instance->error("User or password is incorrect");