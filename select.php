<?php

 try {
             $pdo = new PDO($dns, $user, $password);
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $select = $pdo->query('SELECT * FROM kosmonauti');
             $select->execute();
             $all= $select->fetchAll();
            }
            catch (PDOException $e) {
             die('Connection failed: ' . $e->getMessage());
            }     