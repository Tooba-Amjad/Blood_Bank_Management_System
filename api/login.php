<?php
    session_start();
    include("connection.php");
    $email=$_POST['email'];
    $pass=$_POST['password'];
     $query= "select * from admin1 where email='$email' and a_pass='$pass'  ";
    $check = mysqli_query($connect,$query);
    if (mysqli_num_rows($check) > 0) {
        // Admin login successful
        echo '<script>
        window.location = "../routers/dashboard.php";
    </script>';
    } 
    else{
        echo '<script>
        alert("Invalid credentials!");
        window.location = "../";
    </script>';
}

    