<?php include('Database/server.php');  
    session_start();
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
    <title>Profile</title>
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
                    <a href="result.php">ผลลงทะเบียนเรียน</a>
                </div>
                <div class="HeadSection">
                    <a href="profile.php"><p>ประวัตินักเรียน</p></a>
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
            <div class="main_box">
                <div class="box">
                    <div class="box1">
                        <u>ข้อมูลนักเรียน</u>
                        <div class="box2">
                            <div class="br">
                                <p>เลขประจำตัว :</p><div class="box2-1"><?php echo $_SESSION["studentid"];?></div> 
                                <p>ชื่อ-นามสกุล :</p><div class="box2-2"><?php echo $_SESSION["namethai"];?></div> 
                                <p>เพศ :</p><div class="box2-1"><?php echo $_SESSION["gender"];?></div>
                            </div>
                            <div class="br">
                                <p>ระดับชั้น :</p><div class="box2-3"><?php echo $_SESSION["class"];?></div> 
                                <p>ห้องเรียนที่ :</p><div class="box2-4"><?php echo $_SESSION["room"];?></div> 
                                <p>ปีที่เข้าเรียน :</p><div class="box2-1"><?php echo $_SESSION["year"];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="box1">
                        <u>ข้อมูลนักเรียน</u>
                        <div class="box2">
                            <div class="br">
                                <p>บัตรประชาชน :</p><div class="box2-2"><?php echo $_SESSION["show1"];?></div> 
                                <p>เชื้อชาติ :</p><div class="box2-1"><?php echo $_SESSION["regin"];?></div> 
                                <p>สัญชาติ :</p><div class="box2-1"><?php echo $_SESSION["nation"];?></div>
                            </div>
                            <div class="br">
                                <p>ศาสนา :</p><div class="box2-3"><?php echo $_SESSION["religion"];?></div> 
                                <p>วันเกิด :</p><div class="box2-3"><?php echo $_SESSION["birthday"];?></div> 
                                <p>เบอร์โทรศัพท์ :</p><div class="box2-3"><?php echo $_SESSION["phone"];?></div> 
                            </div>
                            <div class="br">
                                <p>ที่อยู่ :</p><div class="box2-5"><?php echo $_SESSION["address"];?></div> 
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <?php echo $_SESSION["show1"];?>
                <?php echo $_SESSION["studentid"];?>
                <?php echo $_SESSION["namethai"];?>
                <?php echo $_SESSION["nameeng"];?>
                <?php echo $_SESSION["gender"];?>
                <?php echo $_SESSION["class"];?>
                <?php echo $_SESSION["room"];?>
                <?php echo $_SESSION["year"];?>
                <?php echo $_SESSION["regin"];?>
                <?php echo $_SESSION["nation"];?>
                <?php echo $_SESSION["religion"];?>
                <?php echo $_SESSION["birthday"];?>
                <?php echo $_SESSION["address"];?>
                <?php echo $_SESSION["phone"];?> -->
                
            </div>
        </div>
    </div>

    <script>

    </script>
    
</body>
</html>