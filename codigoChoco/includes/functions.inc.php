pepitop@gmail.com<?php

function emailExists($conn, $email){
    $sql = "SELECT * FROM usuario WHERE correo = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    /*    header("location: ../../index.php");
        exit(); */
        echo "errorprepare";
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData))   
    {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function loginUser($conn, $email, $pwd) {
    $user = emailExists($conn, $email);
    if($user === false) {
      // header("location: ../../index.php");
       // exit();
       echo "erroruserfalse";

    }

    $pwdHashed = $user["contraseña"];

    if($pwd === $pwdHashed) {
        session_start();
        $_SESSION["userID"] = $user["id_usuario"];
        $_SESSION["correo"] = $user["correo"];
        $nombre =  $user["nombre"];
        $apellido =  $user["apellido"];
        $nombrecompleto = $nombre . " " .  $apellido;
        $_SESSION["nombreCompleto"] = $nombrecompleto; 
        header("location: ../../index.php"); 
        exit();
    }
    else {
        echo "<br> contraseña invalida";
    }
}