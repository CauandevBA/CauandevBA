<?php include('menu/menu.php');?>
<?php 



   $id  = $_GET['id'];

   $sql = "DELETE FROM tbl_adm WHERE id=$id";

   $res = mysqli_query($conn, $sql);

?>
<?php 