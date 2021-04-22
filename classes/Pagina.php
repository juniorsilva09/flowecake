<?php
namespace classes;
use classes\Mysql;



class Pagina 
{
 
  //Visitas
  public static function  contarVisitas(){
    if(!isset($_COOKIE['visita'])){
      setcookie('visita','true',time() + (60*60*24*7));
      $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.visitas` VALUES (null,?,?)");
      $sql->execute(array($_SERVER['REMOTE_ADDR'],date('Y-m-d')));
    }
  }
  public static function updateUsuarioOnline(){
    if(isset($_SESSION['online'])){
      $token = $_SESSION['online'];
      $horarioAtual = date('Y-m-d H:i:s');
      $check = MySql::conectar()->prepare("SELECT `id` FROM `tb_usuario.online` WHERE token = ?");
      $check->execute(array($_SESSION['online']));

      if($check->rowCount() == 1){
        $sql = MySql::conectar()->prepare("UPDATE `tb_usuario.online` SET ultima_acao = ? WHERE token = ?");
        $sql->execute(array($horarioAtual,$token));
      }else{
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
        $ip = $_SERVER['REMOTE_ADDR'];
      }
        $token = $_SESSION['online'];
        $horarioAtual = date('Y-m-d H:i:s');
        $sql = MySql::conectar()->prepare("INSERT INTO `tb_usuario.online` VALUES (null,?,?,?)");
        $sql->execute(array($ip,$horarioAtual,$token));
      }
    }else{
      $_SESSION['online'] = uniqid();
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
          $ip = $_SERVER['REMOTE_ADDR'];
      }
      $token = $_SESSION['online'];
      $horarioAtual = date('Y-m-d H:i:s');
      $sql = MySql::conectar()->prepare("INSERT INTO `tb_usuario.online` VALUES (null,?,?,?)");
      $sql->execute(array($ip,$horarioAtual,$token));
    }
  }

  public static function listarUsuariosOnline(){
    self::limparUsuariosOnline();
    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_usuario.online`");
    $sql->execute();
    return $sql->fetchAll();
  }

  public static function limparUsuariosOnline(){
    $date = date('Y-m-d H:i:s');
    $sql = MySql::conectar()->exec("DELETE FROM `tb_usuario.online` WHERE ultima_acao < '$date' - INTERVAL 2 MINUTE");
  }

  public static function alertUser($mensagem,$color){
  echo '<div style="background-color:'.$color.';" class="alertM">
  <h3>'.$mensagem.'</h3>
  </div><!-- alertM -->';
  }
  public static function redirecionar($url){
    echo '<script>location.href="'.$url.'"</script>';
    die();
  }

}//Fim



?>