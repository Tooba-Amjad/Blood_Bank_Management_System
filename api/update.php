

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
   $id=$_GET['id'];
   
   $age = $_POST['age'];
    $disease = $_POST['disease'];
    // Prepare the insert query
    
    
     $sql="Update patient set p_age='$age',p_disease='$disease' where p_id='$id'";
    $result = mysqli_query($conn, $sql);
  if( $result){
    echo
    '<script>
          alert("Patient Updated successfully!!!");
          window.location = "../routers/patient.php";
 
          </script>';
         
  }
    // Close the connection
    $conn->close();
}

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
   
    <h1>Patient Updattion</h1>
<form action=""    method="post">
<label for="Quantity">Enter Age</label>
         <input type="number" name="age" id="age" placeholder="Enter Age" required>
<label for="Disease">Enter Disease  </label>
         <input type="disease" name="disease"  id="disease" placeholder="Enter Date" required>
         <button id="loginbtn" type="submit" name="registerbtn">Submit</button><br><br>
    
    
                
      
      

    </form>
</body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
</html>       
      