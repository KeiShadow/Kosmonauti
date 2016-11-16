<?php
    define('SQL_HOST','localhost');
     define('SQL_DBNAME','kosmonauti');
     define('SQL_USERNAME','user');
     define('SQL_PASSWORD','Password');
     
     $dns = 'mysql:dbname='.SQL_DBNAME. ';host='.SQL_HOST. '';
     $user = SQL_USERNAME;
     $password=SQL_PASSWORD;
try {
     
    $pdo = new PDO($dns, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $select = $pdo->query('SELECT * FROM uzivatele');
     $select->execute();
     $all= $select->fetchAll();
     foreach ($all as $single) {
     $login = filter_input(INPUT_POST, 'login');
     $pass = filter_input(INPUT_POST, 'password');

       if($login == $single['login'] && $pass==$single['password']){
           header('Location: administrace.php'); 
       } else{
           
            header('Location: prihlaseni.php'); 
            
       }
     }
} catch (PDOException $e) {
             die('Connection failed: ' . $e->getMessage());
            }  
