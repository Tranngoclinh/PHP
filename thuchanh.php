<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
         width: 100px;
         margin: 0px 441px;
}
h2 {
    text-align: center;
}
input[type="submit"] {
    margin: 5px 92px;
}
h3 {
    margin: 16px 0px 0px 440px;
}

    </style>
</head>
<body>
    <fieldset>
    <form action="" method="post">
        <div class="login">
            <div class="index">
            <h2>Login</h2>
            </div>
            <label for="">
                Username: <br>
                <input type="text" name="username" size="30" placeholer="username">
                <br>
            </label>
            <label for="">
                Password:<br>
                <input type="password" name="password" size="30" placeholer="password">
            </label>
            <label for="">
            <br> <input type="submit" value="Sign in">
          <!-- <input type="submit" value="Login"> -->
            </label>
        </div>

    </form>
    </fieldset>
</body>
</html>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
       // echo '<br> Tên đăng nhập là: '.$username;
      //  echo '<br> Mật khẩu là: '.$password;
        if ($username === "nguyenlinh23444@gmail.com" && $password === "88888888") {
            echo "<h3>  Xin Chào <span style='color:red'>" .$username. "</span> </h3>";
        } else{
            echo "<h3><span style='color:red'>Sai tài khoản hoặc mật khẩu</span></h3>";
        }
    }
?>