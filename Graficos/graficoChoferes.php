<html>
    <script src="../js/Chart.min.js" type="text/javascript"></script>
  <style>
    .container {
      width: 70%;
      margin: 15px auto;
    }
    body {
      text-align: center;
      color: red;
      background: linear-gradient(to right,  #BBDAA0 ,  #F2A480 )
    }
    h2 {
      text-align: center;
      font-family: "Verdana", sans-serif;
      font-size: 30px;
   
    }
  </style>
  <body>
<?php
  include_once '../Controlador/Functions.php';
  $obj=new Functions();
  $vec=$obj->GrafiChoferes();
  $label="";
  $data="";
  foreach ($vec as $d){
      $label=$label."'$d[0]',";
      $data=$data."$d[1],";
  }
  $label=substr($label,0,strlen($label)-1);
  $data=substr($data,0,strlen($data)-1);
?>
      
     <div class="container">
      <h2>Gráfico de Choferes</h2>
       <div>
        <canvas id="myChart"></canvas>
       </div>
    </div>
  </body>
    <script>
      var ctx = document.getElementById("myChart").getContext("2d");
      var myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: [<?=$label?>],
          datasets: [
            {
              label: "Cantidad de viajes realizados",
              data: [<?=$data?>],
              backgroundColor: "rgba(229, 43, 31, 0.8)",
            },
          ],
        },
        options: {
            scales: {
              y: {
                beginAtZero: true,
              },
            },
          },
      });
       
      
      
    </script>

</html>