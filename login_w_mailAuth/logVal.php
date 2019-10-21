<?php
session_start();
/*SE OBTIENEN CREDENCIALES DEL FORMULARIO*/
$mail = $_POST["mail"];
$passw = $_POST["pass"];

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = ['Mail' => $mail];
$options = [];
$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('overclock.users', $query);

foreach($cursor as $k => $row){
    $varX = json_encode($row);
}

$data = json_decode($varX);

$hash = $data->Passwd;

/*SE VERIFICA SU CONTRASEÑA*/
if(password_verify($passw, $hash)) {
    $_SESSION['token'] = bin2hex(random_bytes(8));
    /*IsAdmin es un boolean que indica si el usuario tiene acceso a las opciones de administrador*/
    $admin = $data->isAdmin;
    $_SESSION['name'] = $data->F_Name; 
    
    $msg = $_SESSION['token'];
    //## 
    include("php/mailSender.php");
	$email = new email("Overclock WebMaster","d3kc0lcr3v0@gmail.com","str0ngp455w0rd");
	$email->add_address($_POST["mail"],$_SESSION['name']);
	
	if ($email->sendm('Codigo de verificacion:',$msg)){		
		$result = 'Sent';
    }			
	else{
				   
	   $result = 'Mensaje no enviado';
	   $email->ErrorInfo;
	}
    //## 

    if ($admin) {
        $_SESSION['state'] = "ADMIN"; 
    }
    else {
        $_SESSION['state'] = "USER"; 
    }
    header("Refresh: 1;URL=auth.html");
}
else {
    echo "Credenciales invalidas";
    header('Refresh: 2;URL=index.html');
}

?>