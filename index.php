 <?php
  include 'db.php';
 ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>Evidence kosmonautu</title>
    </head>
    <body>
     <div class="container">
        <h1>Evidence kosmonautů</h1>   
        <div class="text-primary text-justify">
            <p>
           Dobrý den TechFides,<br>
           Na této strance můžete najít evidenci kosmonautů v tabůlce.
           Pro vložení nebo odstranění evidovaných kosmonautů se musíte přihlásit.
           Po kliknutí na tlačítko "Přihlásit se" budete přesměrování na stránku s formulářem. 
           Login a Heslo zasílám emailem.
           Po úspěšném přihlášení budete přesměrování na stránku administrace, kde budete moct odstranit nebo vložit kosmonauta.<br>
           Děkuji.
           </p>
        </div>
            <!-- Trigger the modal with a button -->
            
        
        <table class='table table-striped table-inverse' align="center"> 
        <thead>
        <tr>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Datum narození</th>
        <th>Superschopnost</th>
        </thead>
        <tbody>
           <?php foreach ($all as $single) : ?>
             <tr>
             <th><?php echo $single['name']?></th>
            <th><?php echo $single['lname']?></th>
            <th><?php echo $single['bday']?></th>
            <th><?php echo $single['power']?></th>      
           <?php endforeach;?>
            
        </tbody>
        </table>
            <a href="prihlaseni.php"> <button type="button" class="btn btn-info btn-lg">Přihlásit se</button> </a>           
    </div>   
    <!--
        
    </body>
</html>
