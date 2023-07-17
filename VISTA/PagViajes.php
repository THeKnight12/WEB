<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/adminlte.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php
        include_once '../Controlador/Functions.php';
        $obj = new Functions();
        $rutcod= $_REQUEST["id"];
        $viaje = $obj->listaViaje($rutcod);
        $ruta=$_REQUEST["ruta"]
    ?>
        <center>
        <h2 class="text-grey bg-gradient-blue"> Lista de Viajes de <?php echo $ruta  ?> </h2>
        <img src='../turismo/<?php echo $ruta?>.jpg' width='400' height='400' />
        <table class="table table-striped text-gray-dark">
            <thead>
                <tr><th>N° de Viaje<th>Fecha de Viaje<th>Hora del Viaje<th>Costo<th>Pasajeros
            </thead>
            <tbody class="text white">
                 <?php
                     foreach ($viaje as $k=>$d){
                     echo "<tr><td>$d[0]";
                     echo "<td>$d[1]";
                     echo "<td>$d[2]";
                     echo "<td>$d[3]";
                     echo "<td><a href='../Vista/PagPasajeros.php?Numviaje=$d[0]'>ver</a></td>";
                  }
                ?>
            </tbody>        
    </center>
</body>
</html>
