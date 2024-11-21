<?php
// Creation of Database

    $asserver = "localhost:3306";
    $asun = "root";
    $aspass = "";
    // Establishing connection
    $ascon = mysqli_connect($asserver, $asun, $aspass);

    if(!$ascon){
        die("database connection failed!" . mysqli_connect_error());
    }

     // Creation of Database for Account
     $chkdb = "SHOW DATABASES LIKE 'ycs_crm'";
     $aschk = mysqli_query($ascon,$chkdb);
     if(mysqli_num_rows($aschk) == 0){
         $assql = "CREATE DATABASE ycs_crm";
         if(mysqli_query($ascon, $assql)){
                 echo "creation of database is successful!<br>";
         }else{
             echo "error in creation of database...<br>" . mysqli_error($ascon);
         }
     }
     else{
         echo "database already created<br>";
     }

    mysqli_close($ascon);
?>

<?php
    // Database connection details
    $asserver = "localhost:3306";
    $asun = "root";
    $aspass = "";
    $asdbname = "ycs_crm";
    
    // Establishing connection
    $ascon = mysqli_connect($asserver, $asun, $aspass, $asdbname);
    
    // Check connection
    if (!$ascon) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //admin_accounts table creation
    $chkdb = "SHOW TABLES LIKE 'admin_accounts'";
    $aschk = mysqli_query($ascon, $chkdb);
    if(mysqli_num_rows($aschk) == 0){
        $assql = "CREATE TABLE admin_accounts(
                aid INT(3) PRIMARY KEY AUTO_INCREMENT,
                first_name VARCHAR(50),
                last_name VARCHAR(50),
                email VARCHAR(200) NOT NULL UNIQUE,
                password TEXT)";
        if(mysqli_query($ascon, $assql)){
            echo "creation of admin_accounts table is successful! <br>";
        }else{
            echo "unsuccessful creation of admin_accounts table!... try again. " . mysqli_error($ascon) . "<br>";
        }
    }else{
        echo "admin_accounts table has been created already! <br>";
    }
?>