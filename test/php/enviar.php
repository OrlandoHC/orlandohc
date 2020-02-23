<?php
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');

//Recibir todos los parámetros del formulario
$nss = $_POST['NSS'];
$nombre = $_POST['userName'];
$apaterno = $_POST['aPaterno'];
$amaterno = $_POST['aMaterno'];
$para = $_POST['userEmail'];
$telefono = $_POST ['telefono'];
$asunto = $_POST['subject'];
$contactar = $_POST['contactar'];
//$contactar = isset($_POST['contactar']) ? $_POST['contactar'] : $_POST['No'] ;
$mensaje = $_POST['content'];



//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

//Nuestra cuenta
$mail->Username ='ccs.imss.coah@gmail.com';
$mail->Password = '1m551m55';

//CODIFICACIÓN CON ACENTOS y HTML
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';

//Agregar destinatario
//$mail->AddAddress($Username);
// SE AGREGARON MAS DIRECCIONES DE CORREO A LA LISTA DE DIFUSIÓN ORIGINAL 
$mail->AddAddress('orlando.hernandezc@imss.gob.mx'); 
$mail->AddAddress('orlando.hdzcruz@gmail.com'); //DESARROLLADOR 
$mail->AddAddress('gilberto.lopez@imss.gob.mx'); // COORDINADOR DELEGACIONAL DE INFORMATICA EN COAHUILA
$mail->addAddress('leobardo.juarez@imss.gob.mx'); // DESARROLLADOR  
//$mail->addAddress('penelope.cueto@imss.gob.mx');
//$mail->addAddress('claudia.roman@imss.gob.mx'); 

$mail->Subject = $asunto;

//CONTENIDO 
//$mail->Body = $_POST["userName"].$_POST[" subject"].$_POST[" content"]; FUNCIONA PERO NO SEPARADO
$mail->Body = '<html><body>';
$mail->Body .= '<center><h4>Nueva entrada registrada en Comunica - IMSS - Coahuila</h4></center>';
$mail->Body .='<center><img border="0" alt="Comunica - IMSS - Coahuila" src="https://i.imgur.com/B9BEn7S.jpg" width="100" height="100"></a></center>';
$mail->Body .= "<p><strong>Nombre: ";
$mail->Body .= addslashes(trim($_POST['userName']));
$mail->Body .= " $aMaterno"; // ESPACIO FORZADO
$mail->Body .= $_POST["aPaterno"];
$mail->Body .= " $aMaterno"; // ESPACIO FORZADO 
$mail->Body .= $_POST["aMaterno"];
$mail->Body .= "<p>Numero de Seguro Social: ";
$mail->Body .= addslashes(trim($_POST['NSS']));
$mail->Body .= "<p>Correo Electronico: ";
$mail->Body .= addslashes(trim($_POST['userEmail']));
$mail->Body .= "<p>Asunto: ";
$mail->Body .= addslashes(trim($_POST['subject']));
$mail->Body .= "<p> Descripcion: ";
$mail->Body .= addslashes(trim($_POST['content']));
$mail->Body .= "<p> Quiere ser contactado: ";
$mail->Body .= $_POST["contactar"];
$mail->Body .= '</strong></body></html>';

//$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
 

//////////////////////////////////
//      AREA DE CÓDIGO DE PRUEBA    //




/////////////////////////////////////


//Para adjuntar archivo

//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
	echo'<script type="text/javascript">
			alert("Gracias por utilizar este canal de contacto, su solicitud fue registrada y enviada con éxito.");
			window.location="./index.php"
		 </script>';
}
else{
	echo'<script type="text/javascript">
			alert("Error, su solicitud no fue enviada.");
			window.location="./index.php"
		 </script>';
}
?>

