

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "master";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   // Get form values
   $donorId=$_GET['donorId'];
   
   $date = $_POST['date'];
    $quant = $_POST['quantity'];


    $query = "SELECT bld_grp FROM donor WHERE d_id= '$donorId'";
$result = mysqli_query($conn, $query);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Donor already exists
$row = mysqli_fetch_assoc($result);
$bldgrp = $row['bld_grp'];
    // ... other form fields

    // Prepare the insert query
    
    $sql = "INSERT INTO blood (d_id,bld_quant ,d_date) VALUES ('$donorId','$quant','$date')";
    $result1 = mysqli_query($conn, $sql);
    $sql1 = "SELECT s_availabe  FROM stock WHERE s_bloodgrp = '$bldgrp'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);
    $existingQuantity = $row['s_availabe'];
    
    // Calculate new quantity by adding the form quantity to existing quantity
    $newQuantity = $existingQuantity + $quant;
    
    // Update stock table with the new quantity
    $updateSql = "UPDATE stock SET s_availabe = $newQuantity WHERE s_bloodgrp = '$bldgrp'";
    mysqli_query($conn, $updateSql);
    // Modify 'your_table_name' with the actual name of your table

    // Execute the query
    if ($conn->query($sql) === TRUE) {
     
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <h1>Blood Donation</h1>
<form action=""    method="post">
<label for="Quantity">Enter Quantity</label>
         <input type="number" name="quantity" id="qunatity" placeholder="Enter Quantity" required>
<label for="Date">Enter Donation Date  </label>
         <input type="date" name="date"  id="date" placeholder="Enter Date" required>
         <button id="loginbtn" type="submit" name="registerbtn">Submit</button><br><br>
    
    
                
            
      

    </form>
</body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
</html>       
      