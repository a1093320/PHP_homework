<?php
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="ADMIN"){
            echo "<a href='logout.php'>登出系統</a><br>";
            echo "Welcome to Admin!";
        }else{
            echo "非法進入系統<br>";
            echo "<a href='login.php'>回登入頁</a>";
            exit();
        }
    }
    else{
        echo "非法進入系統<br>";
        echo "<a href='login.php'>回登入頁</a>";
        exit();
    }

?>
