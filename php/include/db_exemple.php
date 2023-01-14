<?php
$host = 'localhost';
$dbname = 'database_name';
$username = 'database_username';
$password = 'database_password';

$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>