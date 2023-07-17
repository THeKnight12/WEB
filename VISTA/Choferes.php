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
        $vec = $obj->Choferes();
    ?>
    <center>
        <?php include '../Controlador/NavBar.php' ?>
        <h2 class="text-grey bg-yellow"> Conductores</h2>
        <table class="table table-hover bg-gradient-fuchsia text-gray-dark">
            <thead>
                <tr><th>Cod <th>Nombre del Chofer<th>Fecha de Ingreso<th>Categoria<th>Foto<th>Viajes
            </thead>
            <tbody>
                 <?php
                     foreach ($vec as $k=>$d){
                     echo "<tr><td>$d[0]";
                     echo "<td>$d[1]";
                     echo "<td>$d[2]";
                     echo "<td>$d[3]";
                     echo "<td><img src='../Fotos/$d[0].jpg' width='90' height='90' class='rounded-circle' /></td>";
                     echo "<td><a href='../Vista/Viajes.php?chofer=$d[0]'>ver</a></td>";
                     }
                ?>
            </tbody>        
    </center>
    </body>
</html>
