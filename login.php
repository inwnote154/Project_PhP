<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="all_container">
        <center><h1>ลงทะเบียนเรียนออนไลน์</h1></center>
        <div class="container1">
            <center><h2>เข้าสู่ระบบ</h2></center>
            <form action="Store_db.php" method="post">
                <div class="container2">
                    <p>เลขประจำตัว</p>
                    <input type="text" name="studentid">
                </div>
                <div class="container2">
                    <p>รหัสผ่าน</p>
                    <input type="password" name="password">
                </div>
                <div class="forgotPassword">
                    <p>หากลืมรหัสผ่านกรุณาติดต่อเจ้าหน้าที่ ?</p>
                </div>
                <div class="container2">
                    <button name="log_students">เข้าสู่ระบบ</button>
                </div>
            </form>
        </div>
    </div>
    <div class="box">
        <img src="image/logo.png" alt="logo" class="logo">
    </div>
    <script>

    </script>
</body>
</html>


