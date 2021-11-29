<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com/docs/5.1/examples/navbar-fixed/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>To do list</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link rel="icon" type="image/png" sizes="16x16"  href="../img/1.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Custom styles for this template -->
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a1dbbaaff3.js" crossorigin="anonymous"></script>

  </head>
  <body cz-shortcut-listen="true">
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/#">TO DO LIST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">My list</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-3 rounded">
    <a href="nuevo.php" class="float-end btn btn-primary"> Nuevo </a>
    <h1>Mi Lista</h1>
  </div>

  <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Activos</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Papelera</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <?php
    require '../conexion.php';

    $sql = "SELECT * FROM lista WHERE estado = 1";

    $resultado = $conexion->query( $sql );

    $cant = 1;
    echo "<table class='table table-striped mt-3'>
          <thead>
            <tr>
              <th>#N</th>
              <th>TAREAS</th>
              <th>ACCIONES</th>
            </tr>
          <thead>
          <tbody>";

    while( $datos = $resultado->fetch_assoc() ){
      echo "<tr>";
      echo "<td>".$cant."</td>";
      echo "<td>".$datos['Tareas']."</td>";
      echo "<td>
              <a href='editar.php?id={$datos['id']}' class='btn btn-sm btn-info' title='Editar'> <i class='fas fa-edit'></i> </a>

              <a href='eliminar.php?id={$datos['id']}' class='btn btn-sm btn-danger' title='Eliminar' onclick='return confirm(\"¿Está seguro de eliminar el registro?\")'> <i class='fas fa-trash-alt'></i> </a>
            </td>";
      echo "</tr>";
      $cant++;
    }
    echo "</tbody></table>";

  ?>
  </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <?php
    require '../conexion.php';

    $sql = "SELECT * FROM lista WHERE estado = 0";

    $resultado = $conexion->query( $sql );

    $cant = 1;
    echo "<table class='table table-striped mt-3'>
          <thead>
            <tr>
              <th>#N</th>
              <th>TAREAS</th>
              <th>ACCIONES</th>
            </tr>
          <thead>
          <tbody>";

    while( $datos = $resultado->fetch_assoc() ){
      echo "<tr>";
      echo "<td>".$cant."</td>";
      echo "<td>".$datos['Tareas']."</td>";
      echo "<td>
              <a href='volver.php?id={$datos['id']}' class='btn btn-sm btn-info' title='Editar'> <i class='fas fa-undo'></i> </a>

              <a href='eliminar2.php?id={$datos['id']}' class='btn btn-sm btn-danger' title='Eliminar' onclick='return confirm(\"¿Está seguro de eliminar el registro definitivamente?\")'> <i class='fas fa-trash-alt'></i> </a>
            </td>";
      echo "</tr>";
      $cant++;
    }
    echo "</tbody></table>";

  ?>
    </div>
  </div>


</main>


    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body></html>