<?php include('Database/server.php');
    if(isset($_POST['log_students'])) {
        $studentid = $_POST['studentid'];
        $pass = $_POST['password'];
        $password = $pass;
        $query = "SELECT * FROM login_db WHERE studentid = '$studentid' AND password = '$password' ";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $sqltxt = mysqli_query($conn,"SELECT * FROM infomation order by studentid");
            while ( $rs = mysqli_fetch_array ( $sqltxt ) )
            {
                if($rs[1] == $studentid){
                    header("location: Login_DB.php?id=$rs[1]");
                }
            }
            
        } else {
            header('location: login.php');
        }
    }
?>