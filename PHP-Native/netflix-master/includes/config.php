<?php 
ob_start(); // Turns on output buffering.
session_start(); // We are able to use sessions.

date_default_timezone_set("Europe/Budapest"); // Setting the time zone.

try {
    $con = new PDO("mysql:dbname=reeceflix;host=127.0.0.1", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>