<?php
     define('SQL_HOST','localhost');
     define('SQL_DBNAME','kosmonauti');
     define('SQL_USERNAME','user');
     define('SQL_PASSWORD','Password');
     
     $dns = 'mysql:dbname='.SQL_DBNAME. ';host='.SQL_HOST. '';
     $user = SQL_USERNAME;
     $password=SQL_PASSWORD;
     include 'select.php';