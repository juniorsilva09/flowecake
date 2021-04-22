<?php

include('config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
  <title>AMÉLIA | Flowercake Nova Geração</title>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/styles.css<?php echo VERSION ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a9efdc36f0.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <link rel="shortcut icon" href="<?php echo INCLUDE_PATH ?>img/logo.ico" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <img src="img/logo.svg" class="img-fluid" width="180" alt="Amélia Lino">
      </div>
    </div>
  </div>

  <main class="container main-container">
      
      <div class="card " style="width: 1200px; height:auto;">
      <div class="container">
        <div class="row">
          <div class="col-md-6" id="img-capa">
            <img src="img/image-bg.jpg" class="img-fluid" width="480" alt="Flower Cake Amélia Lino">
          </div>
          <div class="col-md-6 text-center" id="box-right">
            <h1> FLOWER CAKE NOVA GERAÇÃO </h1>
            <p>Nesse um curso, reuno técnicas das coberturas de Chantilly Plástico e Pasta de Chantilly. 
            São muitas novidades e técnicas autorias para produção de flores em bicos em 22 modelos de flores, 2 modelos de Bolos Florais e muito mais, tudo perfeito e completo para você!</p>
            <button type="button" class="btn btn-lg btn-dark text-uppercase w-75 mt-4" data-bs-toggle="modal" data-bs-target="#modal-btn">Comprar</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="modal-btn" tabindex="-1" aria-labelledby="modal-btn" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center" style="background-color: #272727;">
          <img src="img/logo.svg" class="img-fluid modal-title" width="142" alt="Amélia Lino">
        </div>
        <div class="modal-body">
          <form action="" class="form-group">
            <input type="text" class="form-control mt-3" id="email" placeholder="Digite seu email">
            
              <input type="submit" class="form-control mt-4 btn btn-sm btn-dark" value="Boleto">
              <input type="submit" class="form-control mt-3 btn btn-sm btn-dark" value="Comprar à vista">
              <input type="submit" class="form-control mt-3 btn btn-sm btn-dark" value="Comprar Parcelado">
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
        </div>
      </div>
    </div>
  </div>


<script
src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/js.js"></script>
</body>
</html>