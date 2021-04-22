<?php
include('../config.php');
use classes\Mysql;
use classes\Email;
use classes\Pagina;

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
// se entrar aqui é uma chamada ajax

parse_str($_POST['valores'],$valores);


if($valores['nome'] == ''){
  $mensagem = Pagina::alertUser('Campo nome esta vazio !', 'red');
}elseif($valores['email'] == ''){
  $mensagem = Pagina::alertUser('Campo Email esta vazio !', 'red');
}elseif($valores['telefone'] == ''){
  $mensagem = Pagina::alertUser('Campo Telefone esta vazio !', 'red');
}else{
  $sql = Mysql::conectar()->prepare("SELECT * FROM `captura` WHERE email = ?");
  $sql->execute(array($valores['email']));
  if($sql->rowCount() == 1){
    $mensagem = Pagina::redirecionar('https://joinzap.app/amelialino');
  }else{
    $sql = MySql::conectar()->prepare("INSERT INTO `captura` VALUES (null,?,?,?)");
    $sql->execute(array($valores['nome'],$valores['email'],$valores['telefone']));

    // $alertarCompra = new Email('smtp.hostinger.com.br', 'testes@contemonline.com.br', 'Joaovictor04112001', 'Não Responda');
    // $alertarCompra->addAdress(array('testes@contemonline.com.br' => 'Joaovictor'));
    
    // $template = file_get_contents('../vendor/phpmailer/template/template.php');
    // $variables = array(
    //   '{{Curso}}' => 'Casseirinho Festivos',
    //   '{{nome}}' => $valores['nome'],
    //   '{{email}}' => $valores['email'],
    //   '{{telefone}}' =>  $valores['telefone'],
    // );
    // foreach($variables as $key => $value){
    //   $template = str_replace($key, $value, $template);
    // }
    // $alertarCompra->formatarEmail('Assunto', $template);
    
    // $alertarCompra->enviarEmail();
    $mensagem = Pagina::redirecionar('https://joinzap.app/amelialino');
  }
}


}else{
  echo ';(';
  die();
}
echo $mensagem;
?>