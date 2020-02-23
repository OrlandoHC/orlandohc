<?php

if(!empty($_POST["send"])) {

	$nss = $_POST["NSS"];

	$name = $_POST["userName"];

	$apaterno = $_POST["aPaterno"];

	$amaterno = $_POST["aMaterno"]; 
	
	$telefono = $_POST ["telefono"];

	$email = $_POST["userEmail"];

	$subject = $_POST["subject"];
	
	//$contactar = isset($_POST['contactar']) ? $_POST['contactar'] : "No" ;
	$contactar = $_POST["contactar"]; // ORIGINAL
	//$contactar = isset($_POST['contactar']) ? $_POST['contactar'] : false; // FUNCIONA 
  	//$dbFlag = $contactar ? 'Si' : 'No'; // FUNCIONA
	$content = $_POST["content"];
	

	$conn = mysqli_connect("localhost", "id8700070_root", "h4ck34m3", "id8700070_comunica") or die("Connection Error: " . mysqli_error($conn));

	mysqli_query($conn, "INSERT INTO tblcontact (NSS,user_name,apaterno,amaterno,telefono,user_email,subject,contactar,content) VALUES ('" . $nss. "','" . $name. "','" . $apaterno. "','" . $amaterno. "','" . $telefono. "','" . $email. "','" . $subject. "','" . $contactar. "','" . $content. "')");

	$insert_id = mysqli_insert_id($conn);

	//if(!empty($insert_id)) {

	   $message = "Gracias por utilizar este canal de contacto, su solicitud fue registrada y enviada con éxito";

	   $type = "success";

	//}

}

require_once "contact-view.php";
?>