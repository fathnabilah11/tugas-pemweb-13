<?php
include('../koneksi/koneksi.php');
$total  = mysqli_query($koneksi, "SELECT Total_Recovered FROM penderita order by no asc");
$nama_negara = mysqli_query($koneksi, "SELECT Country FROM penderita order by no asc");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pie Chart Total Recovered</title>
    <script src="../js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="piechart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($nama_negara)) { echo '"' . $p['Country'] . '",';}?>],
            datasets: [
            {
              label: "Total Recovered",
              data: [<?php while ($p = mysqli_fetch_array($total)) { echo '"' . $p['Total_Recovered'] . '",';}?>],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193',
                '#ffa07a',
                '#ff8c00',
                '#b22222',
                '#8b0000',
                '#f08080'
              ]
            }
            ]
            };

  var myPieChart = new Chart(ctx, {
                  type: 'pie',
                  data: data,
                  options: {
                    responsive: true
                }
              });

</script>