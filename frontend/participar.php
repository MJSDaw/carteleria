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
            <h3>REQUISITOS PARA PARTICIPAR</h3>
            <ul>
                <li>Para participar debes ser alumno/a del centro IES Fernando Sagaseta.</li>
                <li>Los carteles deben reflejar elementos alusivos a la cultura, tradiciones, símbolos y patrimonio de Canarias.</li>
                <li>Se permite cualquier técnica, siempre que el diseño final esté en formato digital.</li>
                <li>El cartel debe presentarse en formato vertical y en tamaño DIN A3 (3508 x 4961 píxeles). Subido en formato PDF.</li>
                <li>Cualquier diseño que incluya contenido inapropiado o contrario a los valores de respeto y convivencia será descalificado.</li>
                <li>Al participar, los autores ceden los derechos de uso y reproducción de sus diseños al centro educativo para posibles exposiciones y publicaciones.</li>
            </ul>
        </div>
        <div id="formulario">
            <form action="" method="post">
                <h3>FORMULARIO DE INSCRIPCIÓN</h3>
                <div><label for="cial">CIAL: </label>
                <input type="text" name="cial" id="cial" required></div>
                <div><label for="pin">PIN: </label>
                <input type="text" name="pin" id="pin" required></div>
                <div><label for="titulo">Título del cartel: </label>
                <input type="text" name="titulo" id="titulo" required></div>
                <label for="imagen" id="uploadBtn">Cargar cartel</label>
                <input type="file" name="imagen" id="imagen">
                <input type="submit" value="Subir" id="subir">
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