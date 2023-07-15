
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donor.php">Donor Details</a>  
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patient.php">Patient Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Regiter_dr.html">Donor Registeration</a>      
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Regiter_pa.html">Patient Registeration</a>      
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stock.php">Stock</a>
          </li>
      </ul>
    </nav>
      <h1>Dashboard</h1>
<div class="box-set">
  <div class="box"><h4><i>A+</h4><h6> 
  <?php
    session_start();
    include("../api/connection.php");
      $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='A+'  ";
      $result = mysqli_query($connect, $sql);
       // Process and display total amount of blood
       if (!$result) {
        die("Query execution failed: " . mysqli_error($connect)); }
    $row = mysqli_fetch_assoc($result);
    $totalAmount = $row['total'];
     if( $totalAmount==0){
      echo "Blood Not available";
    }
    else
    echo "Total Amount of Blood: " . $totalAmount ." ml";
  
  ?>
  </i>
  </h6>
    </div>
    
    <!-- .........................................................for A-................................................. -->
    <div class="box"><h4><i>A-</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='A+'";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  
  <!-- .........................................................for B+................................................. -->
  <div class="box"><h4><i>B+</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='B+'  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  



  <!-- .........................................................for B-................................................. -->




  <div class="box"><h4><i>B-</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='B-'  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  



  <!-- .........................................................for AB+................................................. -->


  <div class="box"><h4><i>AB+</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='AB+'  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  


  
  <!-- .........................................................for AB-................................................. -->
  <div class="box"><h4><i>AB-</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='AB-'  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  
  <!-- .........................................................for O+................................................. -->

  <div class="box"><h4><i>O+</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='O+'  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  
  <!-- .........................................................for O-................................................. -->
  <div class="box"><h4><i>O-</h4><h6>
  <?php
    $sql = "SELECT s_availabe  AS total FROM stock where s_bloodgrp ='O-'  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
   if( $totalAmount==0){
    echo "Blood Not available";
  }
  else
  echo "Total Amount of Blood: " . $totalAmount ." ml";

?>
</i>
</h6>
  </div>
  <!-- ......................................Donor.................................................... -->
</div>
<div class="info">
  <div class="box1"><h5><i>Donors Available </h5><h6>
  <?php
    $sql = "SELECT count(d_id) AS total FROM donor ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
  echo "Total number of Donors:  ".$totalAmount;

?>
</h6></i>
  </div>
  <!-- ..........................................Patients......................................... -->
  <div class="box1"><h5><i>Patient Available </h5><h6>
  <?php
    $sql = "SELECT count(p_id) AS total FROM patient ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
  echo "Total number of Patients:  ".$totalAmount;

?>
</h6></i>
     </div>
 <!-- ..........................................Stock......................................... -->
 <div class="box1"><h5><i>Stock</h5><h6>
  <?php
    $sql = "SELECT SUM(s_availabe ) AS total FROM stock  ";
    $result = mysqli_query($connect, $sql);
     // Process and display total amount of blood
     if (!$result) {
      die("Query execution failed: " . mysqli_error($connect)); }
  $row = mysqli_fetch_assoc($result);
  $totalAmount = $row['total'];
  echo "Total Blood Available:  ".$totalAmount ." ml";

?>
</h6></i>
 
</div>


      
  
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
</html>