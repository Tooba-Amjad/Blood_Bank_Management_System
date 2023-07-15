<?php
    session_start();
    include("connection.php");

    $fame=$_POST['firstname'];
    $lame=$_POST['lastname'];
    $add=$_POST['address'];
    $CNIC=$_POST['CNIC'];
    $num=$_POST['number'];
    $altnum=$_POST['number1'];
     $bldgrp=$_POST['bloodgrp'];
     $quant=$_POST['qunatity'];
     $date=$_POST['date'];
     $result1 ="insert into donor ( d_fname, d_lnum, d_address,CNIC,d_num,bld_grp)
     values ('$fame','$lame','$add','$CNIC','$num','$bldgrp')";
     
// Make a database query to check if the donor exists
$query = "SELECT d_id FROM donor WHERE CNIC = '$CNIC'";
$result = mysqli_query($connect, $query);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Donor already exists
    echo '<script>
    alert("Donor Already Exists");
</script>';
$row = mysqli_fetch_assoc($result);
$donorId = $row['d_id'];

header("Location: edit.php?donorId=".$donorId);
   
} 

else{
 $insert = mysqli_query($connect,$result1);
     $donorId = mysqli_insert_id($connect);  
   $insert1=mysqli_query($connect,"insert into blood(d_id,d_date,bld_quant)values ('$donorId','$date','$quant')");
    $insert2=mysqli_query($connect,"insert into donor_info(d_id,donor_num)values ('$donorId','$altnum')");
  $sql = "SELECT s_availabe  FROM stock WHERE s_bloodgrp = '$bldgrp'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $existingQuantity = $row['s_availabe'];
    
    // Calculate new quantity by adding the form quantity to existing quantity
    $newQuantity = $existingQuantity + $quant;
    
    // Update stock table with the new quantity
    $updateSql = "UPDATE stock SET s_availabe = $newQuantity WHERE s_bloodgrp = '$bldgrp'";
    mysqli_query($connect, $updateSql);
         if($insert1) {
          echo
          '<script>
                alert("Registration Successful !!!");
                window.location = "../routers/donor.php";
       
                </script>';
               
      }
}

    ?>