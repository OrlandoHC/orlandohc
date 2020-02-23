<html>
<head>
    
<style type="text/css">
textarea
{
    border:1px solid #999999;
    width:98%;
    margin:5px 0;
    padding:1%;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>Comunica IMSS Coahila</title> 
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->


<!-- 

TESTING 
oninvalid="this.setCustomValidity(`Se requieren 10 caracteres como mínimo.`)"



-->
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://mimo84.github.io/bootstrap-maxlength/bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<!--<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>-->

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<p>
<center>
<a href="/test">
<img border="0" alt="IMSS Coahuila" src="./img/logo.jpg" width="100" height="100"></a></center>
<div class="container">
<hr>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h5 class="card-title mt-3 text-center">COMUNICA - IMSS - Coahuila</h5>
	<p class="text-center">Déjanos tus sugerencias, quejas y/o comentarios</p>
	<form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="" data-toggle="validator" role="form">

    <div class="form-group input-group">
		<div class="input-group-prepend">
        
		    <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
		 </div>
        <input name="NSS" class="form-control"  maxlength="11" placeholder="Número de Seguro Social" type="tel" required>
    </div> <!-- form-group// -->


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type="text" name="userName" maxlength="25" class="form-control" pattern="[A-Za-z]+" class="control-label" maxlength="30" placeholder="Nombre" required>
        </div>
        
        
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="aPaterno" maxlength="25" class="form-control" class="input-field" placeholder="Apellido Paterno" type="text" required>
    </div>
    

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="aMaterno" maxlength="25" class="form-control" class="input-field" placeholder="Apellido Materno" type="text" >
    </div>
    
     <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="telefono" class="form-control"  maxlength="10" class="input-field" type="tel" placeholder="Telefono o Celular" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text" class="input-field"> <i class="fa fa-align-justify"></i> </span>
		</div>
		<select class="form-control" name="subject" required>
			<option selected="">Selecciona una opción...</option>
			<option>Sugerencia</option>
			<option>Queja</option>
			<option>Comentario</option>
		</select>
	</div> <!-- form-group end.// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text" class="input-field"> <i class="fa fa-envelope"></i> </span>
		</div>
    	<input name="userEmail" class="form-control" placeholder="Correo Electrónico" type="email">
    </div>

    <h6>Escriba aquí:</h6>
    <div class="form-group input-group">
    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span><textarea class="form-control" name="content" id="exampleFormControlTextarea1" maxlength="1000" rows="3" required></textarea></div>
    </div>
    <div class="form-check" class="input-field">
  <!--<input name="contactar" class="form-check-input" value="Si" type="checkbox" id="contactar" checked>-->
  <label class="form-check-label" for="checkbox">
    <h6>¿Desea que nos pongamos en contacto con ustéd?<h6>
    <p>
    <div class="radio" required>
  <label><input class="radio-inline" type="radio" value="Si" name="contactar" checked> Si</label>
        </div>
    <div class="radio">
  <label><input class="radio-inline" type="radio" value="No" name="contactar"> No</label>
</div>
  </label>
  <?php
   // $contactar = isset($_POST['contactar']) ? $_POST['contactar'] : 'No' ; //ORIGINAL FUNCIONA SOLO ENVIA SI NO ENVIA
  ?>
<p>
    <div class="form-group">
        <!--<button type="submit" name="send" class="btn btn-success btn-block" value="Enviar"> Enviar  </button> -->
    </div> <!-- form-group// -->                
    <input type="submit" name="send" class="btn btn-success btn-block" value="Enviar" />
    </div> <!-- form-group// -->                                          
        <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                            
                        <?php
                        require_once("./php/enviar.php");} 
                        ?>
                    </div>                          
                              
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->

   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascripts"></script> 
    <script type="text/javascript">


    var VanillaRunOnDomReady = function() {
      
// Code with description of parameters.
// See full documentation here : https://github.com/mimo84/bootstrap-maxlength/

$('input[maxlength], textarea').maxlength({
  alwaysShow: true, //if true the threshold will be ignored and the remaining length indication will be always showing up while typing or on focus on the input. Default: false.
 // threshold: 10, //Ignored if alwaysShow is true. This is a number indicating how many chars are left to start displaying the indications. Default: 10
  warningClass: "form-text text-muted mt-1", //it's the class of the element with the indicator. By default is the bootstrap "badge badge-success" but can be changed to anything you'd like.
  limitReachedClass: "form-text text-danger mt-1", //it's the class the element gets when the limit is reached. Default is "badge badge-danger". Replace with text-danger if you want it to be red.
  //separator: ' of ', //represents the separator between the number of typed chars and total number of available chars. Default is "/".
  //preText: 'You have ', //is a string of text that can be outputted in front of the indicator. preText is empty by default.
  //postText: ' chars remaining.', //is a string outputted after the indicator. postText is empty by default.
  showMaxLength: true, //showMaxLength: if false, will display just the number of typed characters, e.g. will not display the max length. Default: true.
  showCharsTyped: true, //if false, will display just the remaining length, e.g. will display remaining lenght instead of number of typed characters. Default: true.
  placement: 'top-right-inside', //is a string, object, or function, to define where to output the counter. Possible string values are: bottom ( default option ), left, top, right, bottom-right, top-right, top-left, bottom-left and centered-right. Are also available : **bottom-right-inside** (like in Google's material design, **top-right-inside**, **top-left-inside** and **bottom-left-inside**. stom placements can be passed as an object, with keys top, right, bottom, left, and position. These are passed to $.fn.css. A custom function may also be passed. This method is invoked with the {$element} Current Input, the {$element} MaxLength Indicator, and the Current Input's Position {bottom height left right top width}.
  
  //appendToParent: true, // appends the maxlength indicator badge to the parent of the input rather than to the body.
  //message: an alternative way to provide the message text, i.e. 'You have typed %charsTyped% chars, %charsRemaining% of %charsTotal% remaining'. %charsTyped%, %charsRemaining% and %charsTotal% will be replaced by the actual values. This overrides the options separator, preText, postText and showMaxLength. Alternatively you may supply a function that the current text and max length and returns the string to be displayed. For example, function(currentText, maxLength) { return '' + Math.ceil(currentText.length / 160) + ' SMS Message(s)';}
  //utf8: if true the input will count using utf8 bytesize/encoding. For example: the '£' character is counted as two characters.
  //showOnReady: shows the badge as soon as it is added to the page, similar to alwaysShow
  //twoCharLinebreak: count linebreak as 2 characters to match IE/Chrome textarea validation
  //customMaxAttribute: String -- allows a custom attribute to display indicator without triggering native maxlength behaviour. Ignored if value greater than a native maxlength attribute. 'overmax' class gets added when exceeded to allow user to implement form validation.
  //allowOverMax: Will allow the input to be over the customMaxLength. Useful in soft max situations.
});


    }

var alreadyrunflag = 0;

if (document.addEventListener)
    document.addEventListener("DOMContentLoaded", function(){
        alreadyrunflag=1; 
        VanillaRunOnDomReady();
    }, false);
else if (document.all && !window.opera) {
    document.write('<script type="text/javascript" id="contentloadtag" defer="defer" src="javascript:void(0)"><\/script>');
    var contentloadtag = document.getElementById("contentloadtag")
    contentloadtag.onreadystatechange=function(){
        if (this.readyState=="complete"){
            alreadyrunflag=1;
            VanillaRunOnDomReady();
        }
    }
}

window.onload = function(){
  setTimeout("if (!alreadyrunflag){VanillaRunOnDomReady}", 0);
}

</script>
</body>
</html>
