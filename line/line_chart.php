<?php
include('../koneksi/koneksi.php');
$usa      = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='USA'");
$spain    = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='Spain'");
$italy    = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='Italy'");
$france   = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='France'");
$uk       = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='UK'");
$germany  = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='Germany'");
$turkey   = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='Turkey'");
$russia   = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='Russia'");
$iran     = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='Iran'");
$china    = mysqli_query($koneksi, "SELECT * FROM penderita WHERE Country='China'");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Line Chart Covid-19</title>
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
        <canvas id="linechart" width="200" height="200"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
            labels: ["Total_Cases","New_Cases","Total_Deaths","New_Deaths","Total_Recovered","Active_Cases"],
            datasets: [
                  {
                    label: "USA",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($p = mysqli_fetch_array($usa)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "Spain",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($spain)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "Italy",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($italy)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "France",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CBE0E3",
                    borderColor: "#CBE0E3",
                    pointHoverBackgroundColor: "#CBE0E3",
                    pointHoverBorderColor: "#CBE0E3",
                    data: [<?php while ($p = mysqli_fetch_array($france)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "UK",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#979193",
                    borderColor: "#979193",
                    pointHoverBackgroundColor: "#979193",
                    pointHoverBorderColor: "#979193",
                    data: [<?php while ($p = mysqli_fetch_array($uk)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "Germany",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#ffa07a",
                    borderColor: "#ffa07a",
                    pointHoverBackgroundColor: "#ffa07a",
                    pointHoverBorderColor: "#ffa07a",
                    data: [<?php while ($p = mysqli_fetch_array($germany)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "Turkey",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#ff8c00",
                    borderColor: "#ff8c00",
                    pointHoverBackgroundColor: "#ff8c00",
                    pointHoverBorderColor: "#ff8c00",
                    data: [<?php while ($p = mysqli_fetch_array($turkey)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "Russia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#b22222",
                    borderColor: "#b22222",
                    pointHoverBackgroundColor: "#b22222",
                    pointHoverBorderColor: "#b22222",
                    data: [<?php while ($p = mysqli_fetch_array($russia)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "Iran",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#8b0000",
                    borderColor: "#8b0000",
                    pointHoverBackgroundColor: "#8b0000",
                    pointHoverBorderColor: "#8b0000",
                    data: [<?php while ($p = mysqli_fetch_array($iran)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  },
                  {
                    label: "China",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#f08080",
                    borderColor: "#f08080",
                    pointHoverBackgroundColor: "#f08080",
                    pointHoverBorderColor: "#f08080",
                    data: [<?php while ($p = mysqli_fetch_array($china)) { echo '"' . $p['Total_Cases'] . '","' . $p['New_Cases'] . '","' . $p['Total_Deaths'] . '","' . $p['New_Deaths'] . '","' . $p['Total_Recovered'] . '","' . $p['Active_Cases'] . '",';}?>]
                  }
                  ]
          };

  var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>