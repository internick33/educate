<html>
    <head>
        <title>Subir archivo</title>
    </head>

    <body>
       
        <h1>Enviar un Archivo</h1>
        <br>
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="1024000" />
            <p> Enviar mi archivo: <input name="subir_archivo" type="file" /></p>
            <p> <input type="submit" value="Enviar Archivo" /></p>
        </form>
       
    </body>
</html>