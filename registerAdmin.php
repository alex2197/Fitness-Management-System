<?php
    $conn = mysqli_connect("localhost","root","","fitnessmanagement");
    if(isset($_POST['addadmin']))
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $emailr = $_POST['emailr'];
        $password = $_POST['password'];
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