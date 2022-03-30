<?php
    //如果出現header already sent
    //ob_start();//緩衝區
    session_start();
?>
<?php
    if(isset($_COOKIE['user'])){
        $cookieID=$_COOKIE['user'];
        echo "感謝".$cookieID."回到本系統";
    }else{
        echo "歡迎初次來本系統";
    }
?>
<html>
<head>
    <title>login</title>
</head>
<body>
    <center><font size=40 face="標楷體"><p>登入<p></font>
    <form action="" method="post" enctype="multipart/form-data">
        請輸入您的帳號:<input type="username" name="user"></br>
        </br>請輸入您的密碼:<input type="password" name="password"></br>
        </br><input type="submit" name="submit" value="login">
    </form>
<?php
//$_SESSION["login"]="NO";
$USERID=123456789;
$USERPWD=123456789;
$adminID=1111;
$adminPWD=1111;
//echo time();
date_default_timezone_set('Asia/Taipei');
echo date("m-d-Y H:i:s",time());
//header("Refresh:60");
echo "</br>";

if(isset($_POST["user"])){
    if($_POST["user"]!=null&&$_POST["password"]!=null){
        $user=$_POST["user"];
        $password=$_POST["password"];
        if($USERID==$user&&$USERPWD==$password){
            $_SESSION["login"]="USER";
            //echo "登入成功";
            setcookie("user",$user,time()+17280);
            header("Location:register.php");
            //header("Refresh:2;url=index.php");
        }
        else if($adminID==$user&&$adminPWD==$password){
            $_SESSION["login"]="ADMIN";
            //echo "登入成功";
            setcookie("user",$user,time()+17280);
            header("Location:admin.php");
            //header("Refresh:2;url=index.php");
        }
        else{
            echo "登入失敗，請確認您的帳號密碼";
        }
        //echo "帳號:".$user."</br>";
        //echo "密碼:".$password."</br>";
    }
    else{
        echo "您尚未輸入帳號或密碼";
    }
}else{
    echo "請輸入帳號密碼";
}
?>
</body>
</html>