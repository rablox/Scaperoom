<?php
session_start();

if (isset($_POST['submit'])) {
    $combination = $_POST['combination'];
    if ($combination === '2001') { 
        $_SESSION['room2_unlocked'] = true;
        header('Location: habitacion2der.php');
        exit;
    } else {
        $error = "Combinación incorrecta";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Habitación 1</title>
    <style>
body {
            background-image: url('boom.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        h1, p, label {
            background-color: white;
            display: inline-block;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Habitación 1</h1>
    <br>
    <p>¿Cuando sucedio?</p>
    <form method="POST" action="">
        <label for="combination">Ingresa la fecha para desbloquear el candado y pasar a la Habitación 2:</label>
        <input type="text" name="combination" id="combination" required>
        <button type="submit" name="submit">ABRIR CANDADO</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="index.php">
        <button type="submit">Volver al inicio</button>
    </form>
</body>
</html>
