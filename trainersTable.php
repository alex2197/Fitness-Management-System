<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "fitnessmanagement");
                $query = "SELECT idEntrenador, nombre, apellido, email FROM entrenador";
                $result = $conn-> query($query);
                if($result-> num_rows > 0)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["idEntrenador"] ."</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["email"] . "</td></tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "0 result";
                }
                $conn-> close();
            ?>
        </table>
        <div class="removeTrainer-btn"></div>
            <button type="button" class="btn btn-danger">Remove Member</button>
        </div>
        <div class="addTrainer-btn"></div>
            <button type="button" class="btn btn-success">Add Member</button>
        </div>
    </body>
</html>