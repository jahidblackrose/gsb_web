<?php
  include "db_Class.php";
$obj = new db_class();
$obj->MySQL();

$SQL="SELECT SUM( index_journal ) AS a, SUM( index_proc ) AS b
FROM  `tb_paper`";
  $obj->sql($SQL);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Articles', 'Percentage'],
         <?php
		 
		 
$SQL="SELECT SUM( index_journal ) AS a, SUM( index_proc ) AS b
FROM  `tb_paper`";
  $obj->sql($SQL);
		 
		 
	
echo "['$tid1','$tid2'],";   


		 
		 ?>
		 
       
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>