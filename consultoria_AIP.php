<?php include 'php/conexion_be.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Tablas</title>
    <link rel="stylesheet" href="assets/css/consultoria_AIP.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>


<!--exportar excel-->
    <script>
        function exportarATablaExcel(tablaID, nombreArchivo = ''){
            var descargarUrl;
            var dataType = 'application/vnd.ms-excel';
            var tablaHTML = document.getElementById(tablaID).outerHTML.replace(/ /g, '%20');
            
            nombreArchivo = nombreArchivo ? nombreArchivo + '.xls' : 'datos_tabla.xls';
            
            descargarUrl = document.createElement("a");
            document.body.appendChild(descargarUrl);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tablaHTML], { type: dataType });
                navigator.msSaveOrOpenBlob(blob, nombreArchivo);
            } else {
                descargarUrl.href = 'data:' + dataType + ', ' + tablaHTML;
                descargarUrl.download = nombreArchivo;
                descargarUrl.click();
            }
        }
    </script>

<!--exportar pdf-->
<script>

    async function exportarATablaPDF(tablaID, nombreArchivo = '') {
        nombreArchivo = nombreArchivo ? nombreArchivo + '.pdf' : 'datos_tabla.pdf';
        
        const tabla = document.getElementById(tablaID);
        const canvas = await html2canvas(tabla, {
            scale: 1, // Puedes ajustar este valor para cambiar el tamaño de la imagen
            useCORS: true
        });
        const imgData = canvas.toDataURL('image/png');

        // Ajusta estas dimensiones según tus necesidades
        const pdfWidth = canvas.width;
        const pdfHeight = canvas.height;

        // Crear PDF en el tamaño de la imagen
        const pdf = new jspdf.jsPDF({
            orientation: pdfWidth > pdfHeight ? 'l' : 'p',
            unit: 'px',
            format: [pdfWidth, pdfHeight]
        });

        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
        pdf.save(nombreArchivo);
    }
</script>

<!--exportar txt-->
<script>
   
    function exportarATablaTXT(tablaID, nombreArchivo = '') {
        var texto = '';
        var rows = document.getElementById(tablaID).rows;

        // Ajustar la longitud de la celda para la alineación
        var maxCellLengths = [];
        for (var i = 0; i < rows[0].cells.length; i++) {
            var maxLength = 0;
            for (var j = 0; j < rows.length; j++) {
                maxLength = Math.max(maxLength, rows[j].cells[i].innerText.length);
            }
            maxCellLengths.push(maxLength);
        }

        for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].cells;
            for (var j = 0; j < cells.length; j++) {
                var cellText = cells[j].innerText;
                // Rellenar con espacios para alinear
                while (cellText.length < maxCellLengths[j]) {
                    cellText += ' ';
                }
                texto += cellText + (j === cells.length - 1 ? '' : '  ');
            }
            texto += '\n';
        }

        nombreArchivo = nombreArchivo ? nombreArchivo + '.txt' : 'datos_tabla.txt';
        var element = document.createElement('a');
        element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(texto));
        element.setAttribute('download', nombreArchivo);

        element.style.display = 'none';
        document.body.appendChild(element);

        element.click();

        document.body.removeChild(element);
    }
</script>



</head>
<body>

<div class="titulo-franja">
    <h1 class="titulo">Bienvenido a la consultoria de la AIP</h1>
</div>

<?php
$query = "SHOW TABLES";
$result = $conexion->query($query);

if ($result) {
    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='get'>";
    echo "<label for='tabla' class='label-grande'>Selecciona la informaciòn que desea consultar:</label>";
    echo "<select name='tabla' id='tabla'>";

    while ($row = $result->fetch_row()) {
        $nombreTabla = $row[0];
        $selected = (isset($_GET['tabla']) && $_GET['tabla'] === $nombreTabla) ? ' selected' : '';
        echo "<option value='" . htmlspecialchars($nombreTabla) . "'" . $selected . ">" . htmlspecialchars($nombreTabla) . "</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='Buscar'>";
    echo "</form>";
} else {
    echo "Error al obtener la lista de tablas: " . $conexion->error;
}

// Si se ha seleccionado una tabla y el formulario ha sido enviado
if (isset($_GET['tabla']) && !empty($_GET['tabla'])) {
    $tablaSeleccionada = $_GET['tabla'];
    $tablaSeleccionada = $conexion->real_escape_string($tablaSeleccionada);

    // Mostrar el nombre de la tabla como un título
    echo "<h2 class='titulo-tabla'>" . htmlspecialchars($tablaSeleccionada) . "</h2>";

    $sql = "SELECT * FROM `$tablaSeleccionada`";
    $result = $conexion->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table border='1' id='idTablaResultados'>";
            echo "<tr>";
            while ($fieldinfo = $result->fetch_field()) {
                echo "<th>" . htmlspecialchars($fieldinfo->name) . "</th>";
            }
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 resultados en la tabla: " . htmlspecialchars($tablaSeleccionada);
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }
    echo "<button onclick=\"exportarATablaExcel('idTablaResultados', '".$tablaSeleccionada."')\">Exportar a Excel</button>";

    echo "<button onclick=\"exportarATablaPDF('idTablaResultados', '".$tablaSeleccionada."')\">Exportar a PDF</button>";

    echo "<button onclick=\"exportarATablaTXT('idTablaResultados', '".$tablaSeleccionada."')\">Exportar a TXT</button>";

}

$conexion->close();
?>

<button onclick="window.location.href='principal2.php';" class="btn-regresar">Regresar</button>

</body>
</html>





