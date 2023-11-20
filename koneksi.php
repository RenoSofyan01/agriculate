<?php
$username = "root";
$password = "";
$host = "127.0.0.1";

return new PDO("mysql:host=$host; dbname=agriculate", $username, $password);