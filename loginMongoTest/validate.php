<?php
session_start();
/*SE OBTIENEN CREDENCIALES DEL FORMULARIO*/
$mail = $_POST["mail"];
$passw = $_POST["pass"];

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = ['Mail' => $mail];
$options = [];

$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('alpha.kollektsiya', $query);

foreach($cursor as $k => $row){
    $varX = json_encode($row);
}

$data = json_decode($varX);


$hash = $data->Passwd;
/*SE VERIFICA SU CONTRASEÑA*/
if(password_verify($passw, $hash)) {
    /*IsAdmin es un boolean que indica si el usuario tiene acceso a las opciones de administrador*/
    $admin = $data->isAdmin;
    if ($admin) {
        $_SESSION['state'] = "ADMIN"; 
        $_SESSION['name'] = $data->F_Name;
        header("Location: Admin.php"); 
    }
    else {
        $_SESSION['state'] = "USER"; 
        $_SESSION['name'] = $data->F_Name;  
        header("Location: logged.php"); 
    }
}
else {
    echo "Credenciales invalidas";
    header('Refresh: 3;URL=index.html');
}

?>