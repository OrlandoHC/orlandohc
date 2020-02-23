<?php
    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('tblcontact');
    $xcrud->buttons_position('right'); 
    $xcrud->benchmark(); // PERFORMANCE EN RED INSTITUCIONAL
  	$xcrud->unset_title(); // OCULTAMOS EL NOMBRE DE LA TABLA
    $xcrud->limit_list('20,50,100'); // LIMITE DE ELEMENTOS A MOSTRAR
    $xcrud->order_by('fechaCreacion','DESC') // ORDENAMIENTO POR FECHA Y HORA A PARTIR DE 12 DE FEBRERO DE 2019 
    // EL ULTIMO REGISTRO AL PRINCIPIO DE LA TABLA
    
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Registro de entradas</title>
</head>
 
<body>
 
<?php
    echo $xcrud->render();
    
?>
 
</body>
</html>