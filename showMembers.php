<?php
    $conn = mysqli_connect("localhost", "root", "", "fitnessmanagement");
    if(isset($_GET['showMembers']))
    {
        $query = "SELECT * FROM usuario";
        $query_run = mysqli_query($conn, $query);
        echo "<table border='1'>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        </tr>";
        while($row = mysqli_fetch_array($query_run))
        {
            echo "<tr>";
            echo "<td>". $row['nombre'] . "</td>";
            echo "<td>". $row['apellido'] . "</td>";
            echo "<td>". $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>