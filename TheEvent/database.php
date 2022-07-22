<?php
try {
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $dbname = "event";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}