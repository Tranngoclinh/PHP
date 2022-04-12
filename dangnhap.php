<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {

            width: 250px;
        }

        input[type="submit"] {
            margin: 8px 56px;
        }

        h3 {
            text-align: center;
        }

        fieldset {
            width: 250px;
        }

        input {
            margin: 4px 0px;
        }
    </style>
</head>
<fieldset>

    <body>
        <?php
        $nameErr = $emailErr = $passwordErr = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['login'];
            $password = $_REQUEST['password'];
            $email = $_REQUEST['email'];
            if ($name == "Trần Ngọc Linh" && $email == "nguyenlinh23444@gmail.com" && $password == '88888888') {
                echo  "<h4>Xin Chào <span style='color:red'>" . $name . "</span></h4>";
            }
            if (($name != "Trần Ngọc Linh" && $name != null) || ($email != "nguyenlinh23444@gmail.com" && $email != null) || ($password != '88888888' && $password != null)) {
                echo  "<h4> Bạn nhập sai thông tin!! <span style='color: red'></span></h4>";
            }
            if (empty($_REQUEST['login'])) {
                $nameErr = '*Bạn cần điền tên đăng nhập!!';
            }
            if (empty($_REQUEST['password'])) {
                $passwordErr = '*Bạn cần điền mật khẩu!!';
            }
            if (empty($_REQUEST['email'])) {
                $emailErr = '*Bạn cần điền địa chỉ email!!';
            }
        }
        ?>

        <form action="" method="post">
            <h3>Login</h3>
            Tên Đăng Nhập:<br>
            <input type="text" name="login" placeholder="Tên Đăng Nhập"> <span style="color:red">*</span><br>
            <span class="error" style='color: red'><?php echo $nameErr; ?></span><br>

            Mật Khẩu:<br>
            <input type="password" name="password" placeholder="Mật Khẩu"><span style="color:red"> *</span><br>
            <span class="error" style='color: red'><?php echo $passwordErr; ?></span><br>

            Email:<br>
            <input type="email" name="email" placeholder="Nhập địa chỉ email"><span style="color:red"> *</span><br>
            <span class="error" style='color: red'><?php echo $emailErr; ?></span>

            <input type="submit" value="Đăng Nhập">
        </form>
</fieldset>
</body>

</html>