<?php
    include('Database/server.php');  
    session_start();
    $id = $_SESSION["id"];
    $check1 = mysqli_query($conn,"SELECT * FROM Check1 order by Class ");
    $check2 = mysqli_query($conn,"SELECT * FROM Check2 order by Class ");
    $data = mysqli_fetch_array($check1);
    $data2 = mysqli_fetch_array($check2);
    //echo $data[3];
    //echo $data2[3];
    if($id === $data[0]){
        //echo $data[3];
        $sql = mysqli_query($conn,"SELECT * FROM subject01");
    }
    else if($id === $data2[0]){
        //echo $data2[3];
        $sql = mysqli_query($conn,"SELECT * FROM subject02");
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles/templates.css">
    <link rel="stylesheet" type="text/css" href="Styles/register_and_result.css">
    <link rel="stylesheet" type="text/css" href="Styles/box.css">
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap" rel="stylesheet">
    <title>Result</title>
</head>
<body>
    <div class="container1">
        <div class="IconLogo">
            <img src="image/logo.png" alt="logo" class="logo">
        </div>
        <div class="HeadText">
            <h1>ลงทะเบียนเรียนออนไลน์</h1>
            <p>โรงเรียนมัธยมต้นหมีน้อยวิทยาคมโครงการบริหารส่วนจังหวัดปราจีนบุรี</p>
        </div>
    </div>
    <div class="container_content">
        <div class="container2">
            <div class="section">
                <div class="HeadSection">
                    <a href="register.php">ลงทะเบียนเรียน</a>
                </div>
                <div class="HeadSection">
                    <a href="result.php"><p>ผลลงทะเบียนเรียน</p></a>
                </div>
                <div class="HeadSection">
                    <a href="profile.php">ประวัตินักเรียน</a>
                </div>
                <div class="HeadSection">
                    <a href="login.php">ออกจากระบบ</a>
                </div>
            </div>
            <div class="What">
                <img src="image/img.png" alt="img1">
                <img src="image/img.png" alt="img2">
                <img src="image/img.png" alt="img3">
            </div>
        </div>
        <div class="container3">
            <div class="Name">
                <!-- รับข้อมูลประวัติมาแสดง -->
                <ul>
                    <li>เลขประจำตัว: <?php echo $_SESSION["studentid"] ?></li>
                    <li>ชื่อ - นามสกุล: <?php echo $_SESSION["namethai"] ?></li>
                    <li>ภาคการศึกษาที่: 1/2565</li> 
                </ul>
            </div>
            <?php
                $Actived = 1;
                $Studentid = $_SESSION["studentid"];
                $query = "SELECT * FROM infomation WHERE Active = " . $Actived . " AND studentid = ". $Studentid . " " ;
                $query = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($query);
            ?>
            <?php if(!$result) {?>
                <div class="main_box">
                <div class="textbox">
                    คุณยังไม่ได้ทำการลงทะเบียนเรียน กรุณาลงทะเบียนเรียนก่อน
                </div>
            </div>
            <?php } else {?>
                <?php
                    $Pay = 1;
                    $Studentid = $_SESSION["studentid"];
                    $query = "SELECT * FROM infomation WHERE Pay_Active = " . $Pay . " AND studentid = ". $Studentid . " " ;
                    $query = mysqli_query($conn, $query);
                    $result = mysqli_fetch_assoc($query);
                ?>
                <?php if($result){ ?>
                    <div class="main_box">
                        <div class="textbox">
                            คุณได้ทำการขอใบชำระเงินเรียบร้อยแล้ว
                        </div>
                    </div>
                <?php } else {?>
                    <div class="HeadTable">
                        <ul>
                            <li>รหัสวิชา</li>
                            <li>ชื่อวิชา</li>
                            <li>วันเวลา</li>
                        </ul>
                    </div>
                    <div class="BodyTable">
                        <?php foreach($sql as $row) {?>
                            <ul>
                                <li class="sty1"><?php echo $row["SJid"];?></li>
                                <li class="sty1"><?php echo $row["SJName"];?></li>
                                <li class="sty1"><?php echo $row["SJtime"];?></li>
                            </ul>
                        <?php }?>
                    </div>
                    <div class="skin"></div>
                    <div class="button">
                        <form action ="resulthdb.php" method="post">
                            <button class= "pay" type ="submit" name="Pay">ขอใบชำระเงิน</button>
                        </form>
                    </div>
                    
                <?php } ?>
            <?php }?>
        </div>
    </div>

    <script>
        document.querySelector('.Pay').onclick = function(){
                alert("เจ้าหน้าที่จะทำการตรวจสอบและจะส่งใบชำระเงินให้ แก่ท่านผ่านทางอีเมลส่วนตัวของทางโรงเรียน");
            }
    </script>
    
</body>
</html>