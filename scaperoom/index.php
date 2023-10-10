<?php
session_start();

// Verificar si el jugador ha presionado el botón para entrar en la Habitación 1
if (isset($_POST['enter_room1'])) {
    header('Location: habitacion1.php');
    exit;
}
if (isset($_POST['enter_room1der'])) {
    header('Location: habitacion1der.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Inicio</title>
    <style>
body {
            background-image: url('rumpel.jpg');
            background-size: cover;
            background-repeat: no-repeat;
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
    <h1>Bienvenido al Escape Room</h1>
    <br>
    <p>Presiona el botón para entrar a la Habitación 1 de la izquierda:</p>
    <br>
    <p>Presiona el botón para entrar a la Habitación 1 de la derecha:</p>
    <form method="POST" action="">
        <button type="submit" name="enter_room1">Entrar en la Habitación izquierda</button>
    </form>
    <form method="POST" action="">
        <button type="submit" name="enter_room1der">Entrar en la Habitación derecha</button>
    </form>
</body>
</html>
