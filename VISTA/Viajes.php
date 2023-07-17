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
        $via= $_REQUEST["chofer"];
        $vec = $obj->ViajeChoferes($via);
        ?>
    </body>
    <center>
        <h2 class="text-grey bg-gradient-red"> Lista de Rutas</h2>
        <table class="table table-condensed  text-gray-dark">
            <thead>
                <tr><th>COD<th>Nombre de la ruta<th>Fecha<th>Pago
            </thead>
            <tbody class="text white">
                 <?php
                     foreach ($vec as $k=>$d){
                     echo "<tr><td>$d[0]";
                     echo "<td>$d[1]";
                     echo "<td>$d[2]";
                     echo "<td>$d[3]";
                   
                  }
                ?>
            </tbody>  
    </center>
</html>
