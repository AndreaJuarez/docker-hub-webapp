<html lang="en">

    <head>
        <title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>


  <body>
    <!--Vista inicial-->
    <main role="main" class="container my-auto">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">Visualizar registros</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link">Andrea Sarai Juárez Munguia</a>
              </ul>
            </div>
          </div>
        </nav>
    <br></br>

    <!-- Page Content -->
      <br></br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Primer Apellido</th>
              <th scope="col">Segundo Apellido</th>
              <th scope="col">Email</th>
              <th scope="col">Teléfono</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>$row['nombre']</td>
                <td>$row['apellido_paterno']</td>
                <td>$row['apellido_materno']</td>
                <td>$row['email']</td>
                <td>$row['telefono']</td>
              </tr>
            </tbody>
        </table>

    <div style="width: 500px;">
        <a href="index.html"><button type="button" class="btn" style="background:#C0C0C0">Regresar</button></a>
    </div>

  </body>
</html>