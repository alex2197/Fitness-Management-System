<?php
    $conn = mysqli_connect("localhost", "root", "", "fitnessmanagement");
    $id = $_GET['id'];
    $query = "DELETE FROM usuario WHERE idUsuario = $id";
    if(mysqli_query($conn, $query))
    {
        mysqli_close($conn);
        header('Location: membersTable.php');
        exit;
    }
    else
    {
        echo "Fail to remove member";
    }
?>