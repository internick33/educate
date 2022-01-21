<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/miestilo.css">

    <title>Educa-T</title>
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
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">Login</a>
              </li>
            </ul>
          </div>
        </nav>
    
       <!-- formulario de contacto-->
       <div class="container" style="margin-top: 100px;">
        <div class="row">
          <div class="col-md-4 offset-md-4">

            <form class="form-signin" method="POST" action="procesarLogin.php" >
              <img class="mb-4" src="data:image/png;base64,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" alt="" width="72" height="72" >
              <h1 class="h3 mb-3 font-weight-normal">Please LogIn</h1>
              <label for="inputEmail" class="sr-only">Email </label>
              <input type="text" class="form-control" placeholder="Username" name="username"required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" required style="margin-top: 20px;">
              
              <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;">Sign in</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>

          </div>
        </div>
       </div>
    
     

        <footer class="container">
          <p>&copy; Company 2017-2018</p>
        </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>