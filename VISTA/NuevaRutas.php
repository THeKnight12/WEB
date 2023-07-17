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
        
        <h2 class="text-grey bg-gradient-indigo"> Registro de Nueva Ruta</h2>
        <div class="container-sm">
            <form action="../Complementos/guardar.php" method="POST">
                  <div class="form-group">
                    <label for="nombre_ruta">Nombre de la Ruta</label>
                    <input type="text" class="form-control" id="nombre_ruta" name="nombre_ruta" required>
                  </div>
                  <div class="form-group">
                    <label for="pago">Pago del Viaje</label>
                    <input type="text" class="form-control" id="pago" name="pago" required>
                  </div>
                  <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/jpeg, image/png" required>
                  </div>
                     <button type="submit" class="btn btn-success">Guardar</button>
           </form>
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
