
<html>
    <head>
        <link rel="stylesheet" href="right-section.css"> 
    </head>

    <body>

        <div class="containit">
            <div class="nav">
                <button id="menu-btn">
                <span class="material-symbols-outlined">
                    menu
                </span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Welcome, <b><?php echo $_SESSION["admin_first"];?></b>!</p>
                        <small class="text-muted">Admin</small>
                    </div>
                </div>
            </div>
            <!-- End of Nav -->
            <div class="analyzed">
                <div class="user-profile">
                    <div class="logods">
                        <div><img src="Yangchow.jpg" alt=""></div>
                        <h2>YangChow Station</h2>
                    </div>
                </div>

                <div class="saled">
                        <div class="status">
                            <div class="symbol">
                            <span class="material-symbols-outlined mark">
                                inactive_order
                            </span>
                            </div>
                            <div class="info">
                                <h3>Pending Orders Today</h3>
                                <span class="valued3" data-val=<?php echo "3";?>>0</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
    <!-- Counting Animation -->
    <script>
        let counting2 = document.querySelectorAll(".valued3");
        let counter2 = 1500;

        counting2.forEach((countin2) =>{
            let initial2 = 0;
            let final2 = 0;
            let final_not_zero2 = parseInt(countin2.getAttribute("data-val"));
            console.log(final_not_zero2);
            if(final_not_zero2 != 0){
                final2 = final_not_zero2;
            }else{
                exit;
            }
            let duration2 = Math.floor(counter2 / final2);

            let ctr2 = setInterval(function(){
                initial2 += 1;
                countin2.textContent = initial2;
                if(initial2 == final2){
                    clearInterval(ctr2);
                }
            }, duration2)
        })
    </script>
    <!-- End of Counting Animation -->

    </body>
</html>
