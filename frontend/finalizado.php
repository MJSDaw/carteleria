<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concurso de carteles</title>
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
            <h2>ESTADO: CERRADO</h2>
        </div>
    </header>
    <main>
        <div id="info-evento">
            <h3>¿QUÉ ES ESTE EVENTO?</h3>
            <p>Este evento desarrollado por el centro IES Fernando Sagaseta tiene el motivo de celebrar el día de canarias por medio de este concurso de carteleria.</p>
            <h3>FECHAS DEL EVENTO</h3>
            <ul>
                <li>Presentación de candidaturas: 20 Enero</li>
                <li>Cierre de candidaturas e inicio de periodo de votación: 21 de Abril</li>
                <li>Cierre de votación y resultados: 20 de Mayo</li>
                <li>Entrega de premios: día de Canarias del Sagaseta: 29 Mayo</li>
            </ul>
        </div>
        <hr>
        <div id="carteleria">
            <?php
                require_once "../backend/db.php";

                try {
                    $stmt = $pdo->prepare("
                        SELECT c.titulo, c.imagen
                        FROM carteles c
                        INNER JOIN evento e ON c.evento = e.id
                        WHERE e.id = 1
                    ");
                    $stmt->execute();
                
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                    // Iteramos hasta el número de elementos reales del array
                    $count = min(count($result), 3); // Máximo 3 elementos
                    for ($i = 0; $i < $count; $i++) { 
                        $output = "<div class='tarjeta-cartel finalizado'>";
                        $output .= "<span class='numero-tarjeta'>" . ($i + 1) . "</span>"; // Añadimos el número
                        $output .= "<h4>" . htmlspecialchars($result[$i]['titulo']) . "</h4>";
                        $output .= '<img src="data:image/jpeg;base64,' . base64_encode($result[$i]['imagen']) . '" alt="Cartel" />';
                        $output .= '</div>';
                        echo $output;
                    }
                } catch (PDOException $e) {
                    echo "Error al realizar la consulta: " . $e->getMessage();
                }
            ?>
        </div>
    </main>
    <footer>
        <p>Diseñado y elaborado por el 2º curso del CFGS de Desarrollo de Aplicaciones Web</p>
    </footer>
</body>
</html>