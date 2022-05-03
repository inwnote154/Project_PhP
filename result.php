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

            <div class="HeadTable">
                <ul>
                    <li>รหัสวิชา</li>
                    <li>ชื่อวิชา</li>
                    <li>วันเวลา</li>
                </ul>
            </div>

            <!-- รับข้อมูลวิชามาแสดง -->

            <div class="BodyTable">
                <ul>
                    <li class="sty1">ท010365</li>
                    <li class="sty1">ภาษาไทย</li>
                    <li class="sty1">จันทร์ พุธ ศุกร 09.00 - 10.00</li>
                </ul>
                
            </div>
            <div class="skin"></div>
            <div class="button">
                <button>ลงทะเบียนเรียน</button>
            </div>

            <div class="main_box">
                <div class="textbox">
                    คุณยังไม่ได้ทำการลงทะเบียนเรียน กรุณาลงทะเบียนเรียนก่อน
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
    
</body>
</html>