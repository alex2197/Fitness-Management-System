<?php
    $conn = mysqli_connect("localhost","root","","fitnessmanagement");
    if(isset($_GET['addmember']))
    {
        $fname = $_GET['firstname'];
        $lname = $_GET['lastname'];
        $emailr = $_GET['emailr'];
        $password = $_GET['password'];
        $query = "SELECT * FROM administrador WHERE email = '$emailr'";
        $query_run = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
            header("location: register.html");
        }
        else
        {
            $query = "INSERT INTO administrador(nombre,apellido,email,password)
                VALUES ('$fname','$lname','$emailr','$password')";
            $query_run = mysqli_query($conn, $query);
            echo "Admin register";
        }
    }
?>