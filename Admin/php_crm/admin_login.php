<?php
    require("funcs.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yang Chow Station | Admin Login</title>
    <?php require("links.php"); ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }

        .password-container {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 30%;
            transform: translateY(-80%);
            cursor: pointer;
        }

        .customized{
            position: fixed;
            top: 25px;
            right: 25px;
        }

    </style>
</head>
<body class="bg-light">
    
    <div class="login-form rounded bg-white shadow overflow-hidden">
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <h4 class="bg-dark text-white px-3 py-3">Admin Login</h4>
            <div class="p-4">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control shadow-none" required>
                </div>

                <div class="mb-4 password-container">
                    <label>Password</label>
                    <input type="password" name="password" id="passwordfield" class="form-control shadow-none password-field" required>
                    <span style="cursor: pointer;" class="password-toggle" onclick="appearDisappear1halfPassword()">Show</span>
                </div>
                <button name="login" type="submit" class="btn text-white bg-dark shadow-none">Login</button>
            </div>
        </form>
    </div>

    <?php

        if(isset($_POST['login'])){
            $usernamer = $_POST['username'];
            $filtered = filteringSql($_POST); 
            $usernem = $filtered["username"];
            $pass = $filtered["password"];
            $passvalue = [$usernem, $pass];

            $resManagerSql = "SELECT * FROM admin_accounts WHERE email = ? AND password = ?";
            $rsltResManager = selectMatching($resManagerSql, $passvalue, "ss");
        
            if ($rsltResManager && $rsltResManager->num_rows == 1) {
                $rowing = mysqli_fetch_assoc($rsltResManager);
                $_SESSION['adminLogin'] = true;
                $_SESSION['admin_id'] = $rowing["aid"];
                $_SESSION['admin_first'] = $rowing["first_name"];
                redirection("Dashboard.php");
            }else{
                  alerting("failed", "Are you sure you are an administrator?");
            }
        }
            

    ?>

    <script>
        // script for showing and hiding of password
        function appearDisappear1halfPassword() {
            var passwordFields = document.querySelectorAll(".password-field");
            var passwordToggle = document.querySelectorAll(".password-toggle");

            passwordFields.forEach(function(field, index) {
                if (field.type === "password") {
                    field.type = "text";
                    passwordToggle[index].textContent = "Hide";
                } else {
                    field.type = "password";
                    passwordToggle[index].textContent = "Show";
                }
            });
        }
    </script>
</body>
</html>