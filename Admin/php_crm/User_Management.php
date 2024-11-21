<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YangChow Station | User Management</title>
    <link rel="icon" type="image/x-icon" href="Yangchow.jpg">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          backgroundColor: '#fffbed',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
    
    <div class="containerd">

        <!-- Sidebar Nav -->
        <?php include ('navigation_admin.php');?>
        <!-- End of Sidebar Nav -->
         
        <!-- Main -->
        <main>
            <h1>Users</h1>
            <div id="donutchart" style="width: 900px; height: 500px;"></div>
        </main>
    </div>
        
</body>
</html>