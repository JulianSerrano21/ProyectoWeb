<?php
 
if(isset($_POST["submit"])) {

    $email = $_POST["correo"];
    $pwd = $_POST["pwd"];

    include_once  $_SERVER['DOCUMENT_ROOT'] . "/chocolicioso/codigoChoco/includes/db.inc.php";
    include_once  $_SERVER['DOCUMENT_ROOT'] . "/chocolicioso/codigoChoco/includes/functions.inc.php";
    

/*    if(emptyInputlogin($email, $pwd)) Verifica email, pwd vacios
    {
        header("location: ../../index.php");
        exit(); 
    } */
        loginUser($conn, $email, $pwd);
}



/*	include('conexion.php');
	if(isset($_POST['correo']) && isset($_POST['pwd']){
		$resultado = $conexion ->query("Select * from usuario where email = '".md5($_POST['correo'])."' 
			and contraseña = '".hash("sha256", $_POST['pwd'])."' ") or die($conexion->error);
		if(mysqli_num_rows($resultado) > 0){
			$datos_usuario = mysqli_fetch_row($resultado);
		}else{
			echo "Credenciales incorrectas";
		}
	} */
?>