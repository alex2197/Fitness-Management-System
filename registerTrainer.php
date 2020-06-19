<?php
    $conn = mysqli_connect("localhost","root","","fitnessmanagement");
    if(isset($_POST['addtrainer']))
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $emailr = $_POST['emailr'];
        $password = $_POST['password'];
        $query = "SELECT * FROM entrenador WHERE email = '$emailr'";
        $query_run = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
            header("location: register.html");
        }
        else
        {
            $query = "INSERT INTO entrenador(nombre,apellido,email,password)
                VALUES ('$fname','$lname','$emailr','$password')";
            $query_run = mysqli_query($conn, $query);
            echo "Trainer register";
        }
    }
?>