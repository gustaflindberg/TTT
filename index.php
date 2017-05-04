
<?php
$page_title = "startpage";
include("includes/header.php");
?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

<?php
include("includes/Oauth.php");
       ?>
<?php
include("data.php");
       ?>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Tweets');
        data.addRows([
          
          ['<?php echo $hashtag[0]; ?>', <?php echo $tweetv[0]; ?>],
		  ['<?php echo $hashtag[1]; ?>', <?php echo $tweetv[1]; ?>],
          ['<?php echo $hashtag[2]; ?>', <?php echo $tweetv[2]; ?>],
          ['<?php echo $hashtag[3]; ?>', <?php echo $tweetv[3]; ?>],
          ['<?php echo $hashtag[4]; ?>', <?php echo $tweetv[4]; ?>],
		  ['<?php echo $hashtag[5]; ?>', <?php echo $tweetv[5]; ?>],
          ['<?php echo $hashtag[6]; ?>', <?php echo $tweetv[6]; ?>],
          ['<?php echo $hashtag[7]; ?>', <?php echo $tweetv[7]; ?>],
          ['<?php echo $hashtag[8]; ?>', <?php echo $tweetv[8]; ?>],
		  ['<?php echo $hashtag[9]; ?>', <?php echo $tweetv[9]; ?>],
          ['<?php echo $hashtag[10]; ?>', <?php echo $tweetv[10]; ?>],
          ['<?php echo $hashtag[11]; ?>', <?php echo $tweetv[11]; ?>],
          ['<?php echo $hashtag[12]; ?>', <?php echo $tweetv[12]; ?>],
		  ['<?php echo $hashtag[13]; ?>', <?php echo $tweetv[13]; ?>],
		  ['<?php echo $hashtag[14]; ?>', <?php echo $tweetv[14]; ?>],
        ]);

        // Set chart options
        var options = {'title':'Top trending tweets',
                       'width':950,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>
<?php
include("includes/footer.php");
       ?>

