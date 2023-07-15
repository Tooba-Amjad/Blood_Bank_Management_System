<?php
session_start();
include ("connection.php");
if(isset($_GET['id'])){
  $id=$_GET['id'];
  
$delete=mysqli_query($connect,"Delete from patient  where p_id='$id' ");


header('location:../routers/patient.php');}
if($delete){
  echo '<script>
  alert("Donor Deleted Successfully !!!");
  </script>';
}
?>