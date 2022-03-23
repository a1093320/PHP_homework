<html>
<head>
    <title>註冊資訊</title>
</head>
<body>
<center><font size=40><p>註冊資訊</p></font>
<form action="login.php" method="post" enctype="multipart/form-data">
    選擇您的性別:<input type="radio" name="gender" value="male">男生<input type="radio" name="gender" value="female">女生</br>
    </br>請選擇你的居住城市:
    <select name="city">
    <option></option>
    <option>台北</option>
    <option>高雄</option>
    <option>台中</option>
    <option>台南</option>
    <option>桃園</option>
    <option>新北</option>
    </select><br>
</br>輸入您的住址:<input type="address" name="address"></br>
</br>您的生日:<input type="date" name="date"></br>
</br><input type="submit" name="submit" value="完成註冊">&nbsp<input type="reset" value="重新填寫"></br>
</form>
</center>
</body>
</html>