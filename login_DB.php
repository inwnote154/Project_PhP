<?php
    include('Database/server.php');
    session_start();    
    $id = $_GET['id'];
    $sql = "select * from infomation where studentid = $id";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);

    $_SESSION["show1"] = $data["personalid"];
    $_SESSION["studentid"] = $data["studentid"];
    $_SESSION["namethai"] = $data["namethai"];
    $_SESSION["nameeng"] = $data["nameeng"];
    $_SESSION["gender"] = $data["gender"];
    $_SESSION["class"] = $data["class"];
    $_SESSION["room"] = $data["room"];
    $_SESSION["year"] = $data["year"];
    $_SESSION["regin"] = $data["regin"];
    $_SESSION["nation"] = $data["nation"];
    $_SESSION["religion"] = $data["religion"];
    $_SESSION["birthday"] = $data["birthday"];
    $_SESSION["address"] = $data["address"];
    $_SESSION["phone"] = $data["phone"];
    
    //echo $_SESSION["studentid"];
    //echo $_SESSION["namethai"];
    //header("location: register.php");
    /*
    echo $id;
    echo $data["class"];
    */

    $sqltxt = mysqli_query($conn,"SELECT * FROM checksj order by Class");
    while ( $rs = mysqli_fetch_array($sqltxt) ){
        if($rs[0] === $data["class"]){
            //echo $rs[0];
            header("location: checkSJ.php?id=$rs[0]");
        }
    }
    // Check condition
    /*else{
        echo "Fuck";
    }*/
?>