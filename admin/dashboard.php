<?php
session_start();
if ($_SESSION['loggedIn']) {
  // Allow USER
} else {
  // Redirect to login page
  header('Location: ./login.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$db = "abcdb";

$formDB_Conn = mysqli_connect($servername, $username, $password, $db);
mysqli_connect_error();




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile No</th>

                </tr>
            </thead>
            <tbody>

                <?php

                $query = "SELECT * FROM regdata ORDER BY id DESC" ;
                if ($result = mysqli_query($formDB_Conn, $query)) {
                    while ($row = mysqli_fetch_array($result)) {
                        // print_r($row);
                        $name = $row['name'];
                        $mobileNo = $row['mobileNo'];
                        $id = $row['id'];

                        print("

                        <tr>
                            <th scope='row'>{$id}</th>
                            <td>{$name}</td>
                            <td>{$mobileNo}</td>
                        </tr>
                        
                        
                        ");
                    }
                }

                ?>


            </tbody>
        </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>