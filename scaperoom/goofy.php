<!DOCTYPE html>
<html>
<head>
    <title>Escape Room - Habitación Goofy</title>
    <style>
        body {
            background-image: url('goofyahh.gif'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        h1, h2 {
            color: black; 
        }

        .content {
            text-align: center;
            padding: 20px;
            color: white;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        h1, p {
            background-color: white;
            display: inline-block;
            padding: 5px 10px;
            color: black; /* Agrega color al texto dentro de h1 y p */
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>ERES UN GOOFY</h1>
        <h2>GOOFY AHH MOMENT</h2>
        <!-- Comentario: PHP no está definido en este código HTML, así que he eliminado la sección PHP -->
        <form method="POST" action="index.php">
            <button type="submit" class="button">Volver al inicio</button>
        </form>
    </div>
</body>
</html>
