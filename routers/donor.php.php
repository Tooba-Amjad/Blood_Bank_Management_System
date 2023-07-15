<?php
session_start();
  include ("../api/connection.php");
$sql="Select * from donor Inner Join blood on donor.d_id=blood.d_id";
  $check=mysqli_query($connect,$sql);
  if(!$check){
    die("Query execution failed: " . mysqli_error($connect)); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <link rel="stylesheet" href="../css/table.css">
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
              
          </ul>
        </nav>
        <h1>Donor Details</h1>
        <table class="t">
            <thead>
              <tr>
                <th >First Name</th>
                <th > Last Name</th>
                <th >Address</th>
                <th >CNIC</th>
                <th >Number</th>
                <th >Blood Group</th>
                <th >Blood Quantity</th>
                <th >Donnation Date</th>
                <th >Delete</th>
                
              </tr>
            </thead>
            <tbody>
              
              <?php
              while($row=mysqli_fetch_assoc($check)){
                echo"
                <tr>
          <td> ".$row['d_fname']."</td>
          <td> ".$row['d_lnum']."</td>
          <td> ".$row['d_address']."</td>
          <td> ".$row['CNIC']."</td>
          <td> ".$row['d_num']."</td>
          <td> ".$row['bld_grp']."</td>
          <td> ".$row['bld_quant']."</td>
          <td> ".$row['d_date']."</td>
          <td> <a href='../api/delete.php?id=".$row['d_id']."'>Delete</a></td>
          </tr>
          ";
          
            }
              ?>
              </tbody>
                </table>


    
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
</html>