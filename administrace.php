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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
     <div class="container center-block">
        <h1>Evidence kosmonautů</h1>   
            <!-- Trigger the modal with a button -->
        <table class='table table-striped table-inverse'> 
        <thead>
        <tr>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Datum narození</th>
        <th>Superschopnost</th>
        <th>Odstranit</th>
        </thead>
        <tbody>
           <?php foreach ($all as $single) : ?>
             <tr>
             <th><?php echo $single['name']?></th>
            <th><?php echo $single['lname']?></th>
            <th><?php echo $single['bday']?></th>
            <th><?php echo $single['power']?></th>   
            
            <th>
             <form action="delete.php?id="<?php echo $single['id']; ?> method="GET">
              <input type="submit" value="<?php echo $single['id']; ?>" name="id" />
             </form>
            </th>     
           <?php endforeach;?>
            
        </tbody>
        </table>
       
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Vložit kosmonauta</button>
            <a href="index.php">  <button type="button" class="btn btn-info btn-lg">Odhlásit</button></a>
           </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
             <div class="modal-dialog">
                <!-- Modal content-->
               <div class="modal-content">
                <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Vložit kosmonauta</h4>
                </div>
                <div class="modal-body">
                    
                <form action="insert.php" method="POST">
                        
                 <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Jméno</label>
                   <div class="col-xs-10">
                    <input type="text" title="Jmeno" value=""name="name">
                   </div>
                 </div>

                 <div class="form-group row">
                  <label for="Příjmení" class="col-xs-2 col-form-label">Příjmení</label>
                   <div class="col-xs-10">
                    <input type="text" title="Prijmeni"  name="lastname">
                   </div>
                 </div>
                 <div class="form-group row">
                  <label for="Datum narození" class="col-xs-2 col-form-label">Datum Narození</label>
                    <div class="col-xs-10">
                     <input type="date" title="Datum"  name="bday">
                    </div>
                 </div>
                 <div class="form-group row">
                  <label for="Superschopnost" class="col-xs-2 col-form-label">Schopnost</label>
                    <div class="col-xs-10">
                        <input type="text" checked="" title="Superschopnost"  name="power">
                    </div>
                 </div>

                 <div class="modal-footer">
                    <button type="submit" name= "insert" class="btn btn-default">Vložit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>

                </form>
                    <?php
                    if(urldecode("index.php?Vyplnit")){
                        echo 'Vyplnit vsechny policka ve formulari';
                    }
                    ?>
                  </div>

                </div>

              </div>
            </div>   
           
       <!--
     
    </body>
</html>
