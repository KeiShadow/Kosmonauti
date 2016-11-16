<?php
include 'db.php';
try{
$pdo = new PDO($dns, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id= $_GET['id'];
$delete = $pdo->prepare("DELETE FROM kosmonauti WHERE id='$id'");
$delete->execute();
header('Location: administrace.php');
}
catch (PDOException $e) {
             die('Connection failed: ' . $e->getMessage());
            }    