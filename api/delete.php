<?php
session_start();
include ("connection.php");
if(isset($_GET['id'])){
  $id=$_GET['id'];
  
$delete=mysqli_query($connect,"Delete from donor  where d_id='$id' ");
$delete1=mysqli_query($connect,"Delete from blood  where d_id='$id' ");

header('location:../routers/donor.php');}
if($delete){
  echo '<script>
  alert("Donor Deleted Successfully !!!");
  </script>';
}
?>