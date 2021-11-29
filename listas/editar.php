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
          <a class="nav-link active" href="index.php">My List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-3 rounded">
    <a href="index.php" class="float-end btn btn-secondary"> Volver </a>
    <h1>Editar Tarea</h1>
  </div>

    <?php
      require '../conexion.php';
      $id = $_GET['id'];
      $sql = "SELECT * FROM lista WHERE id = $id";
      $resultado = $conexion->query( $sql );
      $dato = $resultado->fetch_assoc();

      if ($_POST) {

        $tarea = $_POST['Tareas'];

        $sql = "UPDATE lista SET Tareas = '$tarea' WHERE id = $id";

        $resultado = $conexion->query( $sql );

        if ($resultado)
          header('location: index.php');
        else
          echo "Error... " . $conexion->error;

      }

  ?>

  <form class="mt-3 col-md-6" method="POST">
    <input placeholder="Tarea" class="form-control mb-2" name="Tareas" required autofocus value="<?= $dato['Tareas'] ?>">
    <hr>
    <input type="submit" class="btn btn-success">
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>

</main>


    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  

</body></html>