 <?php

session_start();


 $servidor = "localhost";
 $usuario ="root" ;
 $pass = "";
 $db= "php_crud";

 $conn = mysqli_connect(
      $servidor,
      $usuario,
      $pass,
      $db
 );


 

?>