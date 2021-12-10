<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $directorio = 'archivos/';

    $subir_archivo = $directorio.basename($_FILES['subir_archivo']['name']);

    if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
        echo "El archivo es válido y se cargó correctamente.<br><br>";
    } else {
        echo "La subida ha fallado";
    }
    ?>

</body>
</html>