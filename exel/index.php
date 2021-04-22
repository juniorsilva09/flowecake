<?php include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerar Planilha</title>
</head>
<style>
  .gerar{
    background-color: green;
    color: white;
    margin: 23px 0;
    padding: 4px;
    display: inline-block;
  }
</style>
<body>
  <div class="exel">
    <p>Digite A Senha :</p>
    <form action="" method="post">
      <input type="password" name="senha" id="">
      <input type="submit" value="verificar" name="ver">
    </form>
  </div>
  <?php
  if(isset($_POST['ver'])){
    if($_POST['senha'] == 'fatorExel123'){
    $_SESSION['logado'] = true;
    }
  }
  if(isset($_SESSION['logado'])){
    if($_SESSION['logado'] == true){
      echo '<a class="gerar" href="'.INCLUDE_PATH.'exel/gerar_planilha.php">Gerar Relatorio</a>';
    }
  }

  ?>
</body>
</html>