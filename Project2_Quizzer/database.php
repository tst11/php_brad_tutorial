<?php

// Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'tadasdev';
$db_pass = 'tadasdev';

// Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Error Handler
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}