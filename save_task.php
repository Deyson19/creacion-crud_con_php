<?php 

include("db.php");

if (isset($_POST['save_task'])) {
     $titulo = $_POST['title'];
     $descripcion = $_POST['description'];
     
     $query = "INSERT INTO task(title,description) values ('$titulo','$descripcion')";
     $result = mysqli_query($conn,$query);

     if (!$result) {
          die("No se realizó el registro");
     }

     $_SESSION['message'] = 'Tarea Guardada';
     $_SESSION['message_type'] = 'success';



     header("Location: index.php");
}


?>