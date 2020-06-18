<?php
    $conn = mysqli_connect("localhost","root","","fitnessmanagement");
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM administrador WHERE email = '$email' AND password = '$password'";
        $query_run = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
            header("location: mainAdmin.html");
        }
        else
        {
            $query = "SELECT * FROM usuario WHERE email = '$email' AND password = '$password'";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
                header("location: mainUsuario.html");
            }
            else
            {
                $query = "SELECT * FROM entrenador WHERE email = '$email' AND password = '$password'";
                $query_run = mysqli_query($conn, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                    header("location: mainEntrenador.html");
                }
            }
        }
    }
?>