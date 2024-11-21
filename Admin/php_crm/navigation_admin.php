<?php include('urlcheck.php'); ?>


<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
        <link rel="stylesheet" href="New_Navi.css">
    </head>
    <body>
            <!-- Sidebar -->
            <aside>
                <div class="toggled">
                    <div class="logod">
                        <img class="logogo" src="Yangchow.jpg" alt="">
                        <h2>YangChow Station</h2>
                    </div>
                    <div class="closed" id="closed-btn">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>


                <div class="sidebard">
                    <a href="Dashboard.php" class="<?php echo (comparePage() == 'Dashboard.php') ? 'actived' : ''; ?> ">
                        <span class="material-symbols-outlined">
                            bar_chart_4_bars
                        </span>
                        <h3>Dashboard</h3>
                    </a>

                    <a href="User_Management.php" class="<?php echo (comparePage() == 'User_Management.php') ? 'actived' : ''; ?> ">
                        <span class="material-symbols-outlined">
                            manage_accounts
                        </span>
                        <h3>User Management</h3>
                    </a>

                    <a href="#" class="<?php echo (comparePage() == 'Product_Management.php') ? 'actived' : ''; ?> ">
                        <span class="material-symbols-outlined">
                            rice_bowl
                        </span>
                        <h3>Product Management</h3>
                    </a>

                    <a href="#" class="<?php echo (comparePage() == 'Order_Management.php') ? 'actived' : ''; ?> ">
                    <span class="material-symbols-outlined">
                        orders
                    </span>
                        <h3>Order Management</h3>
                    </a>

                    <a href="#" class="<?php echo (comparePage() == 'Customer_Service.php') ? 'actived' : ''; ?> ">
                    <span class="material-symbols-outlined">
                        support_agent
                    </span>
                        <h3>Customer Service</h3>
                    </a>

                    <a href="#">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>

            <!-- End of Sidebar -->
             
        <script src="navi.js"></script>
    </body>
</html>