<?php
    include('Database/server.php');  
    session_start();
    if(isset($_POST['register'])) {  
        $Actived = 1 ;      
        $query = "SELECT * FROM infomation 
        WHERE Active = '$Actived' AND studentid = ". $_SESSION["studentid"] ." " ;
        $result = mysqli_query($conn, $query);

        if(!$result){
            //echo "0";
        }
        else {
            $sql = "UPDATE infomation SET Active = '$Actived'
            WHERE studentid = " . $_SESSION["studentid"] .  " ";
            $query = mysqli_query($conn, $sql);
            //echo "1";
        }
    }
    header("location:register.php");
    /*
    echo "<script>console.log('NO ADD!')</script>" ;
    echo "<script>alert('เมื่อทำการลงทะเบียนเสร็จเรียบร้อยแล้ว กรุณาเข้าไปที่หน้าผลลงทะเบียนเรียนเพื่อตรวจสอบความถูกต้อง และขอใบชำระเงินกับทางเจ้าหน้าที่ ')</script>";
    header("Refresh:0; url=register.php");*/
?>