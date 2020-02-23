<?php
    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('tblcontact');
    $xcrud->buttons_position('right'); 
?>
<!DOCTYPE HTML>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Registro de entradas</title>
</head>
 
<body>
 
<?php
    echo $xcrud->render();
    $xcrud->benchmark(); // PERFORMANCE EN RED INSTITUCIONAL
  	$xcrud->unset_remove();  // ESCONDER BOTON ELIMINAR
  	$xcrud->unset_title(); // OCULTAMOS EL NOMBRE DE LA TABLA
    $xcrud->limit_list('20,50,100'); // LIMITE DE ELEMENTOS A MOSTRAR

?>
 
</body>
</html>