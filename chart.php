<?php
  include "db_Class.php";
$obj = new db_class();
$obj->MySQL();


 
	?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ('re_head.php'); ?>
</head>
<body>

  <div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
      <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
  </div>

  <div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->

    <?php include ('re_menu.php') ; ?>
      
      <section class="probootstrap-section probootstrap-section-colored" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Publication Chart</h1>
            </div>
          </div>
        </div>
      </section>

      
<section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">

                <div class="col-md-12">
                  <h2>Description</h2>
                  <!-- /.row -->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['a', 'B*'],
         
		   <?php	
		 
$SQL="SELECT SUM(index_journal) as a, SUM (index_proc) as b 
FROM  `tb_paper` "; 

//die($SQL);

	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
  	$tid1=$row['a'];
  	$tid2=$row['b'];

echo "['$tid1',$tid2],";   

}	
  ?>
		 
		 
		//  ['Work', 11]

        ]);
      
        // Create and draw the visualization.
        var chart = new google.visualization.ColumnChart(document.getElementById('visualization'))
        chart.draw(data, {title:" "});
        google.visualization.events.addListener(chart, 'select', function()
		{
          var row = chart.getSelection()[0].row;
          var element = data.getValue(row, 0);
          var element1 = data.getValue(row, 1);
	 window.open("pop_details.php?chk=" + element + "&chk1=" + element1 +"","mywindow","menubar=1,resizable=1,width=1000,height=400,left=120,top=90,location=yes");
	  colors:['red','#004411'];
	 
	    }
		
		);
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
        <!-- Features Section -->
        <div class="row">
          <button onClick="myFunction();">Reload</button>
          <div id="visualization" style="width: 1060px; height: 320px; left:0px"></div>
  
    <script>
function myFunction() {
parent.location.reload();
}
</script>	
                </div>
       
          </div>
        </div>
      </section>
      
    

    <?php include ('re_footer.php'); ?>

  </div>
  <!-- END wrapper -->


  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>