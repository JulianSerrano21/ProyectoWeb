<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

// Creamos una conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password);

// Verificamos conexión
if (!$conn) {
  die(" Conexión fallida: " . mysqli_connect_error());
}
echo "-Conexión exitosa";

// Creamos base de datos
$sql = "CREATE DATABASE chocolate";
if (mysqli_query($conn, $sql)) {
  echo "-Base de datos creada exitosamente";
} else {
  echo "-Error al crear base de datos: " . mysqli_error($conn);
}
// Ingresamos a la base de datos
$dbname = "chocolate";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificamos conexión y creamos tablas
if (!$conn) {
    die("-Connection failed: " . mysqli_connect_error());
  }
  
  // Creamos tablas
     //Tabla usuario
  $usuario = "CREATE TABLE USUARIO (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre_usuario VARCHAR(30) NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    telefono VARCHAR(30) NOT NULL,
    direccion VARCHAR(30) NOT NULL
    )";
  if (mysqli_query($conn, $usuario)) {
    echo "-Tabla usuario creada";
  } else {
    echo "-Error en tabla usuario: " . mysqli_error($conn);
  }
    //Tabla producto
  $producto = "CREATE TABLE PRODUCTO (
    id_producto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    stock INT UNSIGNED NOT NULL,
    precio int UNSIGNED NOT NULL,
    info VARCHAR(255) NOT NULL,
    descuento INT,
    imagen longblob not null
    )";
  if (mysqli_query($conn, $producto)) {
    echo "-Tabla producto creada";
  } else {
    echo "-Error en tabla producto: " . mysqli_error($conn);
  }
   // Tabla factura
  $factura = "CREATE TABLE FACTURA (
    id_factura INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_producto INT UNSIGNED  NOT NULL,
    id_usuario INT UNSIGNED NOT NULL,
    fecha DATE NOT NULL,
    precio_total INT UNSIGNED NOT NULL,
    cantidad INT UNSIGNED NOT NULL,
    info VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES PRODUCTO(id_producto),
    FOREIGN KEY (id_usuario) REFERENCES USUARIO(id_usuario)
    )";
  if (mysqli_query($conn, $factura)) {
    echo "-Tabla factura creada";
  } else {
    echo "-Error en tabla factura: " . mysqli_error($conn);
  }
// Tabla slider
  $slider = "CREATE TABLE SLIDER (
    id_slider INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    texto VARCHAR(255),
    imagen longblob
    )";
  if (mysqli_query($conn, $slider)) {
    echo "-Tabla slider creada";
  } else {
    echo "-Error en tabla factura: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>

