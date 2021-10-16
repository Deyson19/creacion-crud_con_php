<?php 

include("db.php");

if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = "SELECT * FROM task Where id = '$id' ";
     $result = mysqli_query($conn,$query);

     if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result);
          $titulo = $row['title'];
          $descripcion = $row['description'];
     }

     if (isset($_POST['update'])) {
          $id = $_GET['id'];
          $titulo = $_POST['title'];
          $descripcion = $_POST['description'];

          $query = "UPDATE task set title = '$titulo', description = '$descripcion' WHERE id = $id ";
          mysqli_query($conn,$query);

          $_SESSION['message'] = 'Task Updated Successfully';
          $_SESSION['message_type'] = 'warning';
          header("Location: index.php");
     }
     
}

?>

<?php include("includes/header.php") ?>

<div class="container">
     <div class="row">
          <div class="col-md-4 mx-auto">
               <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                         <div class="form-group">
                              <input type="text" name="title" value="<?php echo $titulo; ?>" 
                              class="form-control" placeholder="Update Title">
                         </div>
                         <div class="form-group">
                              <textarea name="description" rows="2" class="form-control" placeholder="Update Description">
                                   <?php echo $descripcion; ?>
                              </textarea>
                         </div>
                         <button class="btn btn-success" name="update">
                              Update
                         </button>
                    </form>

               </div>

          </div>
     </div>
</div>


<?php include("includes/footer.php") ?>
