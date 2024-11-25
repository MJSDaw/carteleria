<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votación</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jomhuria&display=swap');
    </style>
</head>
<body>
    <header>
        <div id="logo"><img src="../media/logo-ies-fernando-sagaseta.png" alt="logo-ies-fernando-sagaseta">
        </div>
        <div id="titulo-estado">
            <h1>CONCURSO DE CARTELERIA</h1>
            <h2>ESTADO: ABIERTO</h2>
        </div>
    </header>
    <main id="form_part">
        <div id="requisitos">
            <div id="cartel">
                <h3>Título</h3>
                <img src="../media/cartel_prueba.jpeg" alt="Cartel  de ANONIMO">
            </div>
        </div>
        <div id="formulario">
            <form action="" method="post">
                <h3>FORMULARIO DE INSCRIPCIÓN</h3>
                <div><label for="cial">CIAL: </label>
                <input type="text" name="cial" id="cial" required></div>
                <div><label for="pin">PIN: </label>
                <input type="text" name="pin" id="pin" required></div>
                <input type="submit" value="Votar" id="subir">
            </form>
        </div>
    </main>
    <footer>
        <button id="participar" onclick="volver()">Volver a la página principal</button>
        <p>Diseñado y elaborado por el 2º curso del CFGS de Desarrollo de Aplicaciones Web</p>
    </footer>
    <script>
        function volver(){
            window.location.href = "index.php";
        }
    </script>
</body>
</html>