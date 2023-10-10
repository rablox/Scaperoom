<?php
session_start();


if (!isset($_SESSION['room2_unlocked']) || $_SESSION['room2_unlocked'] !== true) {
    header('Location: habitacion1.php');
    exit;
}

if (isset($_POST['submit'])) {
    $combination = $_POST['combination'];
    if ($combination === '1939') { 
        $_SESSION['room3_unlocked'] = true;
        header('Location: habitacion3.php');
        exit;
    } else {
        $error = "Combinación incorrecta";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Habitación 2</title>
    <style>
body {
            background-image: url('guerra2.jpg');
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
    <h1>Habitación 2</h1>
    <br>
    <p>Felicidades, has desbloqueado la Habitación 2.</p>
    <br>
    <p>¿Cuando comenzo la psegunda Guerra Mundial?</p>
    <form method="POST" action="">
        <label for="combination">Ingresa la fecha para desbloquear el candado y pasar a la Habitación 3:</label>
        <input type="text" name="combination" id="combination" required>
        <button type="submit" name="submit">ABRIR CANDADO</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="POST" action="habitacion1.php">
        <button type="submit">Volver a la Habitación 1</button>
    </form>
</body>
</html>
