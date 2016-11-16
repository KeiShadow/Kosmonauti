<?php
include 'db.php';
try{
    $pdo = new PDO($dns, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$name = filter_input(INPUT_POST, 'name');
$lastname =filter_input(INPUT_POST, 'lastname');
$bday = filter_input(INPUT_POST, 'bday');
$power = filter_input(INPUT_POST, 'power');
if($name=="" && $lastname=="" && $bday=="" && $power==""){
    header('Location: administrace.php?Vyplnit');  
}else{
 $insert = $pdo->prepare("INSERT INTO kosmonauti (name, lname, bday, power)
        VALUES('$name','$lastname','$bday','$power')");
 
$insert->execute();
header('Location: administrace.php');   
}}
catch (PDOException $e) {
             die('Connection failed: ' . $e->getMessage());
            }    



