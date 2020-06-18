<?php
    $conn = mysqli_connect("localhost","root","","fitnessmanagement");
    if(isset($_GET['addmember']))
    {
        $fname = $_GET['firstname'];
        $lname = $_GET['lastname'];
        $emailr = $_GET['emailr'];
        $query = "SELECT * FROM usuario WHERE email = '$emailr'";
        $query_run = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
            header("location: register.html");
        }
        else
        {
            $query = "INSERT INTO usuario(nombre,apellido,email)
                VALUES ('$fname','$lname','$emailr')";
            $query_run = mysqli_query($conn, $query);
            echo "User register";
        }
    }
?>