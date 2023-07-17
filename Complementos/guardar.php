<?php

// Incluir el archivo de conexión
include_once "../Controlador/Conexion.php";

if (isset($_POST['nombre_ruta']) && isset($_POST['pago'])) {

    $nombre_ruta = $_POST['nombre_ruta'];
    $pago = $_POST['pago'];
    $conexion = new Conexion();
    $conn = $conexion->conecta();
    
    $mayuscula= strtoupper($nombre_ruta);
    
    $prefijo='LM';
    $letas= substr($nombre_ruta,0 ,2 );
    $id=$prefijo.$letas;
    
    if (!$conn) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO ruta (RUTCOD, RUTNOM, pago_cho) VALUES ('$id','$nombre_ruta', '$pago')";

    if (mysqli_query($conn, $sql)) {
        header("Location: NuevaRutas.php");
        exit();
    } else {
        echo "Error al guardar el registro: " . mysqli_error($conn);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
} else {
    echo "No se recibieron los datos del formulario";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_FILES["imagen"]) && isset($_FILES["imagen"]["name"])) {
    $carpetaDestino = "turismo/";
    $nombreArchivo = basename($_FILES["imagen"]["name"]);
    $rutaArchivo = $carpetaDestino . $nombreArchivo;

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaArchivo)) {
      echo "La imagen se ha subido correctamente.";
    } else {
      echo "Error al subir la imagen.";
    }
  } else {
    echo "No se ha seleccionado ninguna imagen.";
  }
}



?>
