<?php
    include('Database/server.php');  
    session_start();
    if(isset($_POST['Pay'])) {  
        $Pay = 1 ;      
        $query = "SELECT * FROM infomation 
        WHERE Pay_Active = '$Pay' AND studentid = ". $_SESSION["studentid"] ." " ;
        $result = mysqli_query($conn, $query);

        if(!$result){
            //echo "0";
        }
        else {
            $sql = "UPDATE infomation SET Pay_Active = '$Pay'
            WHERE studentid = " . $_SESSION["studentid"] .  " ";
            $query = mysqli_query($conn, $sql);
            //echo "1";
            header("location: result.php");
        }
    }
    
?>