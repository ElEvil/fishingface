<?php

include("con_db.php");

if ($conex){
    echo"todo correcto";
}
else{
    echo "fallo";
}

if(isset($_POST['inicio'])){
    if(strlen($_POST['Correo']) >=1 && strlen($_POST['Contraseña']) >=1){
        $Correo = trim($_POST['Correo']);
        $Contraseña= trim($_POST['Contraseña']);
        $consulta = "INSERT INTO datos(correo, contraseña) VALUES ('$Correo','$Contraseña')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


?>

