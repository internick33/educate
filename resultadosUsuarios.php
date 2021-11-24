<html>
<head>
  <title>Buscador de usuarios Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light fixed-top " style="background: #2980b9;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2c3e50, #2980b9);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2c3e50, #2980b9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ">
          <a class="navbar-brand" href="#" style="color: white;">Educa-T</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#" style="color: white;">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color: white;">Disabled</a>
              </li>
              <li class="nav-item">
              </li>
            </ul>
          </div>
        </nav>
<h1  class="mt-5">Buscador de usuarios Online</h1>
<?php

  include 'conexion.php';

  $terminobusqueda = $_POST['terminobusqueda'];
  $tipobusqueda = $_POST['tipobusqueda']; 

  trim ($terminobusqueda);

  if (!$tipobusqueda || !$terminobusqueda)
  {
     echo "No has introducido los detalles de la busqueda.  Por favor vuelve e inténtalo de nuevo.";
     exit;
  }

  $tipobusqueda = addslashes($tipobusqueda);
  $terminobusqueda = addslashes($terminobusqueda);

  $buscar = $con->query("select * from usuario where ".$tipobusqueda." like '%".$terminobusqueda."%'");

  $num_resultados = mysqli_num_rows($buscar);

  echo "<p>Número de items encontrados: ".$num_resultados."</p>";

  for ($i=0; $i <$num_resultados; $i++)
  {
     $row = mysqli_fetch_array($buscar);
     echo "<p><strong>".($i+1).". Username: ";
     echo stripslashes($row["nombre"]);
     echo "</strong><br>Password: ";
     echo stripslashes($row[word"]);
     echo "</p>";
  }

?>
</body>
</html>
