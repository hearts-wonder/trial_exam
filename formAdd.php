<?php
$bdd =  new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8;port=3306', 'root', '');

$request = 'INSERT INTO clients (firstName, lastName, birthDate)
            VALUES (:firstName, :lastName, :birthDate)';
$results = $bdd->prepare($request);

$results->execute([

    'firstName' => $_GET['firstName'],
    'lastName' => $_GET['lastName'],
    'birthDate' => $_GET['birthDate']

]);

var_dump($results);
?>



<!doctype html>
<html lang="en">

<head>
    <title>Ajouter élément tableau</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="formShow.php" class="form-group" method="post">
                <input name="firstName" type="text" placeholder="Enter first name">
                <input name="lastName" type="text" placeholder="Enter last name">
                <input name="birthDate" type="date">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>