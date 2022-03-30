<?php
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="USER"){
            echo "<a href='logout.php'>登出系統</a>";
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
