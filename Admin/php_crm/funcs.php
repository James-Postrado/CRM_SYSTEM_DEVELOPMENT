<?php

    $asserver = "localhost:3306";
    $asun = "root";
    $aspass = "";
    $asdbname = "ycs_crm";

    // Checking connection
    $ascon = mysqli_connect($asserver, $asun, $aspass, $asdbname);
    // Check connection
    if (!$ascon) {
        die("Failed connecting, " . mysqli_connect_error());
    }

    function selectMatching($assql, $val, $dtype){
        $ascon = $GLOBALS['ascon'];
        if($asstmt = mysqli_prepare($ascon, $assql)){
            mysqli_stmt_bind_param($asstmt, $dtype, ...$val);
            if(mysqli_stmt_execute($asstmt)){
                $asrslt = mysqli_stmt_get_result($asstmt);
                mysqli_stmt_close($asstmt);
                return $asrslt;
            }else{
                mysqli_stmt_close($asstmt);
                die("Cannot find data!");
           }

        }else{
            die("Cannot find data");
        }
    }

    function filteringSql($passed){
        foreach($passed as $key => $val){
            $passed[$key] = trim($val);
            $passed[$key] = stripcslashes($val);
            $passed[$key] = htmlspecialchars($val);
            $passed[$key] = strip_tags($val);
        }return $passed;
    }

    function redirection($loc){
        echo "<script>
            window.location.href='$loc';
        </script>";
    }

    function alerting($status, $mess){
        $statusholder = ($status == "success") ? "alert-success" : "alert-danger";


        echo <<<alert
            <div class="alert $statusholder alert-dismissible fade show customized" role="alert">
                <strong me-3>$mess</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }
?>