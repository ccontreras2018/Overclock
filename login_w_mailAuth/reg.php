<?php 
    $fnam = $_POST["fnam"];
    $lnam = $_POST["lnam"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $pass = $_POST["pass"];
    $hpass = password_hash($pass, PASSWORD_DEFAULT);

   
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

	$bulk = new MongoDB\Driver\BulkWrite;
	$bulk->insert(['F_Name' => $fnam,
				   'L_Name' => $lnam,
				   'Mail' => $mail,
				   'Phone' => $phone,
				   'Passwd' => $hpass,
				   'isAdmin' => false,
				   ]);
	$manager->executeBulkWrite('overclock.users', $bulk);
		
		
	header('Refresh: 1;URL=index.html');
    
?>
