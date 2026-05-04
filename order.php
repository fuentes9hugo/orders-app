<?php

require "database.php";

session_start();

$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $statement->execute([":email" => $_POST["email"]]);
    
    if (empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["last_name"]) || empty($_POST["orders_amount"])) {
        $error = "Por favor, rellena todos los campos.";
    } else if ($_POST["orders_amount"] < 1 || $_POST["orders_amount"] > 3) {
        $error = "La cantidad de reservas debe estar entre 1 y 3.";
    } else if ($statement->rowCount() == 1) {
        $error = "El email ya tiene una reserva.";
    } else {
        $statement = $conn->prepare("INSERT INTO users (email, name, last_name, orders_amount) VALUES (:email, :name, :last_name, :orders_amount)");
        $statement->execute([
            ":email" => $_POST["email"],
            ":name" => $_POST["name"],
            ":last_name" => $_POST["last_name"],
            ":orders_amount" => $_POST["orders_amount"],
            ]);
    }

    if ($error) {
        $_SESSION["flash"] = $error;
        header("Location: index.php");
        return;
    }
} else {
    header("Location: index.php");
    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.8/darkly/bootstrap.min.css" 
    integrity="sha512-+uC0Ar9AG4/j/iF0Ug22TO9D17MAbD94K7J8h17EzXzN3D5kcOpYQdF4OuiLraHSibCVhz4DIcqwsDboRMVStg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <script
    defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"
    ></script>

    <!-- Static Content -->
    <link rel="stylesheet" href="./static/css/styles.css">

<title>Orders App</title>
</head>
<body>
    <main class="vh-100 d-flex align-items-center justify-content-center">
        <div class="card p-2" style="width: 18rem;">
        <img src="./static/img/room.png" class="rounded-1" alt="Hotel room">
            <div class="card-body">
                <h3 class="text-center fs-4">¡Reserva realizada!</h3>
                <div class="row">
                    <div class="col">
                        <p class="text-center"><?= $_POST["name"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center"><?= $_POST["last_name"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center"><?= $_POST["email"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center"><?= $_POST["orders_amount"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>