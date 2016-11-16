<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        <title></title>
    </head>
    <body>
     <div class="container center_div">
        <h1>Přihlášení</h1>   
          
            <!-- Modal -->
            <form action="login.php" method="POST">
                <div class="form-group row">
                  <label for="Login" class="col-xs-2 col-form-label">Login</label>
                   <div class="col-xs-10">
                    <input type="text" title="Login" value=""name="login">
                   </div>
                 </div>

                 <div class="form-group row">
                  <label for="Password" class="col-xs-2 col-form-label">Password</label>
                   <div class="col-xs-10">
                    <input type="password" title="Password"  name="password">
                   </div>
                 </div>
                  <a href="login.php"><button type="submit" class="btn btn-info btn-lg">Přihlásit</button></a>
            </form>                   
       </div>   
         <!--

    </body>
   
</html>
