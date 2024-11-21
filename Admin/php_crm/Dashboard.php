<?php
    require("funcs.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YangChow Station | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="Yangchow.jpg">
    <link rel="stylesheet" href="Dashboard_Admin.css">


    <!-- Area Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Order'],
          ['November 17, 2024',  4],
          ['November 18, 2024',  10],
          ['November 19, 2024',  12],
          ['November 20, 2024',  13]
        ]);

        var options = {
          title: 'Delivered orders for the current week',
          backgroundColor: '#fffbed',
          colors: ['#cc372a'],
          border: 'none',
          hAxis: {title: 'Day',  titleTextStyle: {color: '#333'}},
          vAxis: {title: 'Orders', minValue: 0},
          animation: {
                startup: true,
                duration: 1500,
                easing: 'out'
          }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <!-- End of Area Chart -->

</head>
<body>
    <div class="containerd">

        <!-- Sidebar Nav -->
        <?php include ('navigation_admin.php');?>
        <!-- End of Sidebar Nav -->
         
        <!-- Main -->
        <main>
            <!-- Analytics -->
            <h1>Analytics</h1>
            <div class="analyzed">
                <div class="sales">
                    <div class="status">
                        <div class="symbol">
                            <span class="mark">
                                ₱
                            </span>
                        </div>
                        <div class="info">
                            <h3>Total Revenue</h3>
                            <span class="valued"><?php echo "2340.00";?></span>
                        </div>
                    </div>
                </div>

                <div class="sales">
                    <div class="status">
                        <div class="symbol">
                        <span class="material-symbols-outlined mark">
                            order_approve
                        </span>
                        </div>
                        <div class="info">
                            <h3>Delivered Orders Today</h3>
                            <span class="valued2" data-val=<?php echo "13";?>>0</span>
                        </div>
                    </div>
                </div>

                <div class="sales">
                    <div class="status">
                        <div class="symbol">
                        <span class="material-symbols-outlined mark">
                            contract_delete
                        </span>
                        </div>
                        <div class="info">
                            <h3>Cancelled Orders Today</h3>
                            <span class="valued2" data-val=<?php echo "0";?>>0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sales-graphs">
                <div id="chart_div" style="width: 100%; height: 450px; background-color: #fffbed"></div>
            </div>
            <!-- End of Analytics -->


            <!-- New Subscribed Users -->
            <div class="new-subs">
                <h2>Recent Subscribed Users</h2>
                <div class="user-list">
                    <div class="user">
                        <span><?php echo "<img src='Yangchow.jpg'"; ?></span>
                        <h2><?php echo "YangChow"; ?></h2>
                    </div>

                    <div class="user">
                        <span><?php echo "<img src='Yangchow.jpg'"; ?></span>
                        <h2><?php echo "YangChow"; ?></h2>
                    </div>

                    <div class="user">
                        <span><?php echo "<img src='Yangchow.jpg'"; ?></span>
                        <h2><?php echo "YangChow"; ?></h2>
                    </div>

                    <div class="user deets">
                        <a href="#" class="view-details">
                            <span><?php echo "<img src='more.png'"; ?></span>
                            <h2>View Details</h2>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of New Subscribed Users -->


            <!-- Trending Products -->
            <div class="trending">
                <h2>Trending Products</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Quantity Sold</th>
                        </tr>
                    </thead>

                    <!-- Trending Products Tracker -->
                    <tbody id="products-trend">
                        <tr>
                            <td>1</td>
                            <td><img style="border-radius: 12px; width: 100%;" src="Yangchow.jpg" alt=""></td>
                            <td>Chicken with Yang Chow Fried Rice</td>
                            <td>110.00</td>
                            <td>13</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><img style="border-radius: 12px; width: 100%;" src="Yangchow.jpg" alt=""></td>
                            <td>Chicken with Yang Chow Fried Rice</td>
                            <td>110.00</td>
                            <td>13</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End of Trending Products -->
        </main>
        <!-- End of Main -->


        <!-- Right sidebar -->
            <div class="right-section">
                <?php include('right-section.php'); ?>
            </div>
        <!-- End of Right sidebar -->
    </div>



    <!-- Counting Animation -->
    <script>
        let counting = document.querySelectorAll(".valued2");
        let counter = 1500;

        counting.forEach((countin) =>{
            let initial = 0;
            let final = 0;
            let final_not_zero = parseInt(countin.getAttribute("data-val"));
            if(final_not_zero != 0){
                final = final_not_zero;
            }else{
                exit;
            }
            let duration = Math.floor(counter / final);

            let ctr = setInterval(function(){
                initial += 1;
                countin.textContent = initial;
                if(initial == final){
                    clearInterval(ctr);
                }
            }, duration)
        })
    </script>
    <!-- End of Counting Animation -->
</body>
</html>