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
        <link href="../Complementos/Bootstrap5/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
   <body>
    <?php
        include_once '../Controlador/Functions.php';
        $obj = new Functions();
        $vec = $obj->ListaRutas();
    ?>
      
    <center>
       <?php include '../Controlador/NavBar.php' ?>
        
        <h2 class="text-grey bg-gradient-indigo"> Rutas de Viaje</h2>
        <div>
            <div class="row">
                <div>
                      <a href="NuevaRutas.php" class="btn btn-primary">Nueva Ruta</a>
                </div>
                
            </div>
        </div>
        <table class="table table-hover bg-gradient-orange text-gray-dark">
            <thead>
                <tr><th>Cod Ruta<th>Nombre de la Ruta<th>Fotografias<th>Pago<th>Ver
            </thead>
            <tbody>
                 <?php
                     foreach ($vec as $k=>$d){
                     echo "<tr><td>$d[0]";
                     echo "<td>$d[1]";
                     echo "<td><img src='../turismo/$d[1].jpg' width='90' height='90' class='rounded-circle' /></td>";
                     echo "<td>$d[2]";
                     echo "<td><a href='../Vista/PagViajes.php?id=$d[0]&ruta=$d[1]'>ver</a></td>";
                     }
                ?>
            </tbody>        
    </center>
</body>

</html>
