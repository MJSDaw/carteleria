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
        <div id="logo">
            <img src="../media/logo-ies-fernando-sagaseta.png" alt="logo-ies-fernando-sagaseta" width="150px">
        </div>
        <div id="titulo-estado">
            <h1>CONCURSO DE CARTELERIA</h1>
            <h2>ESTADO: ABIERTO</h2>
        </div>
    </header>
    <main id="form-part">
        <div id="cartel">
            <h3>ANÓNIMO</h3>
            <img src="" alt="Cartel  de ANONIMO">
        </div>
        <div id="formulario">
            <h3>FORMULARIO PARA VOTAR</h3>
            <form action="" method="post">
                <label for="cial">CIAL: </label>
                <input type="text" id="CIAL" required><br>
                <label for="pin">PIN: </label>
                <input type="text" id="PIN" required><br>
                <input type="submit" value="Votar">
            </form>
        </div>
        <a href="index.php">Volver a la página principal</a>
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