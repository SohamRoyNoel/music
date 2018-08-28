<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Material Compact Login Animation</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="materialContainer">
    <div class="box">
        <div class="title">LOGIN</div>
        <?php
            if (isset($_POST['login'])){
                $email = escape($_POST['email']);
                $password = escape($_POST['password']);

                $find = "select * from user";
                $sender = mysqli_query($connection, $find);

                while ($row = mysqli_fetch_assoc($sender)){
                    $email1 = $row['email'];
                    $password1 = $row['password'];
                    $name = $row['name'];
                    $u_name = $row['user_name'];
                    $phone = $row['phone'];
                    $id = $row['id'];
                    $img = $row['image'];
                    $role = $row['role'];

                    if ($email1 === $email && $password1 === $password){
                        $_SESSION['u_name']=$u_name;
                        $_SESSION['name']=$name;
                        $_SESSION['email']=$email1;
                        $_SESSION['phone']=$phone;
                        $_SESSION['idxxp']=$id;
                        $_SESSION['role']=$role;
                        catchr($u_name);
                        header("Location: ./profile.php");
                    }else{

                    }
                }
            } else {

            }
        ?>
        <form action="" method="post">
            <div class="input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="pass">Password</label>
                <input type="password" name="password" id="pass">
                <span class="spin"></span>
            </div>
            <div class="button login">
                <center><input type="submit" name="login" class="btn btn-lg btn-default btn-primary btn-block" value="Log In"></center>
            </div>
        </form>
        <a href="" class="pass-forgot">Forgot your password?</a>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="js/index.js"></script>

</body>

</html>
