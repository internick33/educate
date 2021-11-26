<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/miestilo.css">
    <title>Educa-T</title>
    <?php
        include 'conexion.php';
    ?>
    

</head>
<body class="container">
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
            </ul>

            <ul class="navbar-nav mr-auto">
              <li>
                <form action="resultadosCursos.php" method="POST" class="form-inline">
                  <span class="text-white"> Tipo de Busqueda: &nbsp;</span>
                  <div class="form-group">
                    <select name="tipobusqueda" class="custom-select">
                      <option value="nombre">Nombre
                      <option value="descripcion">Descripcion
                      <option value="duracion">Duracion
                      <option value="precio">Precio    
                      
                    </select>
                  </div>
                  &nbsp;&nbsp;&nbsp;
                  <span class="text-white">Que buscar? &nbsp;</span>
                  <input name="terminobusqueda" type=text class="form-control">
                  &nbsp;&nbsp;&nbsp;
                  <input type=submit value="Buscar" class="btn btn-primary">
                </form>
              </li>
            </ul>

            
            
          </div>
        </nav>
    
        <main role="main">
          <!-- Main jumbotron for a primary marketing message or call to action -->
          <div class="jumbotron " style="margin-top:100px;">
            <div class="container" >
              <h1 class="display-3 text-center">Educa-T!</h1>
              <p class="text-center">Administracion de Cursos.</p>
            </div>
          </div>
    
          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <h2>Detalle del Curso</h2>
                <table class="table">
                      <?php
                          $id = $_REQUEST['id'];
                          $repetir = $con->query("SELECT * FROM curso WHERE clave = '$id'");
                          
                          while($fila = $repetir->fetch_assoc()){
                      ?>    
                        <tr>
                          <td>
                            <img src="img/<?php echo $fila['clave'] ?>.png" alt="" width="80%" class="img img-thumbnail">
                          </td>
                          <td>
                              <p><b>Clave:</b><?php echo $fila['clave'] ?></p>
                              <p><b>Nombre del curso:</b> <?php echo $fila['nombre'] ?></p>
                              <p><b>Descripcion del curso:</b> <?php echo $fila['descripcion'] ?></p>
                              <p><b>Duracion:</b> <?php echo $fila['duracion'] ?></p>
                              <p><b>Precio:</b> <?php echo $fila['precio'] ?></p>
                          </td>
                        </tr>  
                      <?php
                        }
                      ?>    
                </table>

                <div class="col-md-4 offset-md-5">
                  <a href="listarCursos.php" class="btn btn-info"><i class="fa fa-plus"></i>Volver</a>
                </div>
              </div>
            </div>
    
            <hr>
    
          </div> <!-- /container -->
    
        </main>
    
        <footer class="container">
          <p>&copy; Company 2017-2018</p>
        </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>