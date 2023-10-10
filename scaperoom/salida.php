<?php
session_start();


if (!isset($_SESSION['salida_unlocked']) || $_SESSION['salida_unlocked'] !== true) {
    header('Location: habitacion3.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Salida</title>
    <style>
body {
            background-image: url('topg.jpg'); 
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        h1, p {
            background-color: white;
            display: inline-block; 
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>¡Felicidades! Has escapado con éxito.</h1>
    <br>
    <p>AAHHH NO LO DIGAAAAAA </p>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="index.php">
        <button type="submit">Volver al inicio</button>
</body>
</html>
