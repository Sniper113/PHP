<?php
if (isset($_POST['btn_login'])){
    $error = array();
    //Kiem tra username
    if (empty($_POST['username'])){
        $error['username'] = 'username khong duoc de trong';

    }else{
        $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($pattern, $_POST['username'])){
            $error['username'] = 'username khong dung dinh dang';
        }else{
            $username = $_POST['username'];

        }
    }

    if (empty($_POST['password'])){
        $error['password'] = 'password khong duoc de trong';

    }else{
        $pattern = '/^[A-Za-z0-9_\.!@#$%^*()]{6,32}$/';
        if (!preg_match($pattern, $_POST['password'])){
            $error['password'] = 'password khong dung dinh dang';
        }else{
            $password = $_POST['password'];
        }
    }

    if (empty($error)){
        //echo "xu ly login";
        if (check_login($username, $password)){
            //echo "Login Sussect";
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            redirect("?page=home");
        }else{
            $error['account'] = 'tai khoang khong ton tai';
        }
    }
}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="public/css/login.css" type="text/css"/>
    <link rel="stylesheet" href="">
</head>
<body>
    <div id="wp-form-login">
        <h1 class="page-title">Login</h1>
        <form action="" method="post" id="form-login">
            <input type="text" name="username" value="" id="username" placeholder="username">
            <?php
            if (!empty($error['username'])){
            ?>
                <p class="error"></p>
            <?php
                echo $error['username'];
            ?>
            <?php
                }
            ?>
            <input type="password" name="password" value="" id="password" placeholder="Password">
            <?php
            if (!empty($error['password'])){
                ?>
                <p class="error"></p>
                <?php
                echo $error['password'];
                ?>
                <?php
            }
            ?>
            <input type="submit" name="btn_login" value="Login" id="btn-login">
        </form>
        <a href="" id="lost-pass">ForGet Password</a>
    </div>
</body>
</html>
