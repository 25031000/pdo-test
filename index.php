<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link rel="stylesheet" href="./views/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <!--NAVEGATION-->
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand p-3">
      Gestion de productos
    </a>
  </nav>

  <div class="container-fluid">
    <h1 class="p-3">Seccion productos</h1>
    <div id="app" class="row pt-5 pb-5 border border-dark">
      <div class="col-md-8 p-3">
        <div class="card">
          <div class="card-header bg-primary">
            <h4 class="text-white">Lista de productos</h4>
          </div>
          <div class="card-body" id="accordionExample">
            <?php

            require_once __DIR__ .  "../models/Product.php";
            require_once __DIR__ .  "../models/Database.php";

            $obj = new Product();
            $obj->getAll();

            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3 border ">
        <div class="card">
          <div class="card-header bg-primary">
            <h4 class="text-white">Agregar producto</h4>
          </div>
          <form id="product-form" action="controllers/product-insert.php" method="post" class="form card-body">
            <div class="input-group mb-3">
              <input type="text" id="name" name="name" placeholder="Nombre producto" class="form-control">
            </div>
            <div class="input-group mb-3">
              <input type="number" step="0.01" name="price" max="10000000" id="price" placeholder="Precio producto"
                class="form-control">
            </div>
            <div class="d-grid">
              <input type="submit" value="Agregar" class="btn btn-primary">
            </div>

          </form>
        </div>
        <div class="card mt-3">
          <div class="card-header bg-success">
            <h4 class="text-white">Actualizar producto</h4>
          </div>
          <form id="product-form" action="controllers/product-update.php" method="post" class="form card-body">
          <div class="input-group mb-3">
              <input type="text" id="id" name="id" placeholder="Numero de producto" class="form-control">
            </div>
            <div class="input-group mb-3">
              <input type="text" id="name" name="name" placeholder="Nombre de producto nuevo" class="form-control">
            </div>
            <div class="input-group mb-3">
              <input type="number" step="0.01" name="price" max="10000000" id="price" placeholder="Precio de producto nuevo"
                class="form-control">
            </div>
            <div class="d-grid">
              <input type="submit" value="Actualizar" class="btn btn-success">
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>