<?php
  namespace classes;
  use PDO;
  use PDOException;
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

	class Email{

    private $mail;

		public function __construct($host,$username,$senha,$name)
		{
			
			$this->mail = new PHPMailer;
			$this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
			$this->mail->isSMTP();                                            
			$this->mail->Host       = $host;                    
			$this->mail->SMTPAuth   = true;                                   
			$this->mail->Username   = $username;                     
			$this->mail->Password   = $senha;                               
			$this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
			$this->mail->Port       = 587;                                    
			$this->mail->setFrom($username, $name);
			$this->mail->CharSet = 'UTF-8';
			$this->mail->isHTML(true); 
		}

		public function addAdress($recipients){
		foreach($recipients as $email => $nome)
		{
			$this->mail->AddCC($email, $nome);
		}
		}
		public function formatarEmail($info1,$info2){
			$this->mail->Subject = $info1;
			$this->mail->Body = $info2;
		}

		public function enviarEmail(){
			if($this->mail->send()){
				return true;
			}else{
				return false;
			}
		}

	}//Fim
?>