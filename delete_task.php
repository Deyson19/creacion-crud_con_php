<?php 

include("db.php");

if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = "DELETE FROM task Where id = '$id' ";
     $result = mysqli_query($conn,$query);
     if (!$result) {
          die("No se pudo realizar la operación");
     }
     $_SESSION['message'] = 'Task remove successfully';
     $_SESSION['message_type'] = 'danger';

     header("Location: index.php");
}


?>