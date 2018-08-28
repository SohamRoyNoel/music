<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Symphony.com</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="materialContainer">

    <div class="box">
        <div class="title">REGISTER</div>
        <?php
        if (isset($_POST['register'])){
            $name = escape($_POST['name']);
            $u_name = escape($_POST['uname']);
            $email = escape($_POST['email']);
            $phone = escape($_POST['phone']);
            $password = escape($_POST['pass']);

            if (!empty($name) && !empty($u_name) && !empty($email) && !empty($phone) && !empty($password)){
                $into = "insert into user (name, user_name, email, password, phone) values ('{$name}', '{$u_name}','{$email}', '{$password}', '{$phone}')";
                $pass = mysqli_query($connection, $into);
                header("Location: login_reg.php");
                header("Location: login.php");
            }else{
                echo "Fields are empty";
            }
        }
        ?>
        <form action="" method="post">
            <div class="input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required="">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="name1">Username</label>
                <input type="text" name="uname" id="name1" required="">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="name2">Email</label>
                <input type="email" name="email" id="name2" required="">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="name3">Phone</label>
                <input type="text" name="phone" id="name3" required="">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required="">
                <span class="spin"></span>
            </div>

            <div class="button login">
                <center><input type="submit" name="register" class="btn btn-lg btn-default btn-primary btn-block" value="Log In"></center>
            </div>
        </form>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="js/index.js"></script>

</body>

</html>
