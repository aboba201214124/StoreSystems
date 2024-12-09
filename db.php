<?php
$host = 'database';
$dbname = 'docker';
$username = 'root';
$password = 'tiger';

return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);