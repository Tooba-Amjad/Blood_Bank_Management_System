<?php
    session_start();
    include("connection.php");

    $fame=$_POST['firstname'];
    $lame=$_POST['lastname'];
    $add=$_POST['address'];
    $num=$_POST['number'];
    $bldgrp=$_POST['bloodgrp'];
    $quant=$_POST['qunatity'];
    $age=$_POST['age'];
    $disease=$_POST['disease'];
     
    $sql = "SELECT s_availabe as total from stock where s_bloodgrp = '$bldgrp' ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); 
    }

  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
  if($totalAmount>=$quant){
    echo '<script>
    alert("Blood Available !!!");
    </script>';
    $insert = mysqli_query($connect,"insert into patient ( p_fname, p_lnum, p_address, p_bldgrp, p_Quantity,p_age,p_disease, a_id,patient_num)
    values ('$fame','$lame','$add','$bldgrp','$quant','$age','$disease',1,'$num')");
  
     if($insert ){
      $sql = "SELECT s_availabe  FROM stock WHERE s_bloodgrp = '$bldgrp'";
      $result = mysqli_query($connect, $sql);
      $row = mysqli_fetch_assoc($result);
      $existingQuantity = $row['s_availabe'];
      
      // Calculate new quantity by adding the form quantity to existing quantity
      $newQuantity = $existingQuantity - $quant;
      
      // Update stock table with the new quantity
      $updateSql = "UPDATE stock SET s_availabe = $newQuantity WHERE s_bloodgrp = '$bldgrp'";
      mysqli_query($connect, $updateSql);
           echo '<script>
                  alert("Registration Successful !!!");
                  window.location = "../routers/dashboard.php";
         
                  </script>';
         
     }
  }
 else{
 echo '<script>
    alert("Blood NA !!!");
    window.location = "../routers/dashboard.php";
    </script>';
  } ?>