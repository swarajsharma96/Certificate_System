<?php

require_once ("../../vendor/autoload.php");

if (!isset($_SESSION))
    session_start();

use App\Message\Message;

if (isset($_REQUEST['q'])) {
    $class_name = 'form-control inputValue2';
}
else {
    $class_name = 'form-control inputValue';
    $isHidden = "hidden";
}

if (isset($_REQUEST['s']))
{
    $isHidden = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>

    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../resources/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../resources/css/normalize.css" />
    <link rel="stylesheet" href="../../resources/css/login.css">
</head>
<body>

<section id="login-section">
    <div class="container">
        <div class="row">
            <p class="text-left text-lowercase lead warning-message <?php echo $isHidden; ?>">
                <?php
                echo Message::message();
                ?>
            </p>
            <div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-2 col-md-6 col-sm-7 col-xs-8">
                <div class="login">
                    <p class="lead text-uppercase text-center head-text">LOGIN</p>
                    <div class="login-insider">
                        <form method="post" action="userController.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email / UserName</label>
                                <input type="text" name="userName" class="<?php echo $class_name;?>" id="exampleInputEmail1" placeholder="Email / Username" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="<?php echo $class_name;?>" id="exampleInputPassword1" placeholder="Password" required>
                            </div>

                            <div class="option">
                                <label for="login_as">Login as</label>
                                <select name="LoginAs" id="login_as" class="form-control" required="required">
                                    <option value="">Select a category</option>
                                    <option value="admin">Admin</option>
                                    <option value="register">Register</option>
                                    <option value="ec">Exam Controller</option>
                                    <option value="department">Department</option>
                                    <option value="account">Account</option>
                                    <option value="lib">Library</option>
                                    <option value="ged">GED</option>
                                </select>
                            </div>
                            <br>
                            <br>

                            <button type="submit" name="Submit" class="btn btn-success inputValue">Login</button>
                        </form>

                        <div class="signup">
                            <p class="h5 text-uppercase text-center">Need Account ?</p>
                            <p class="text-center"><a href="signup.php" >Signup</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<script src="../../resources/js/jquery.min.js"></script>
<script src="../../resources/js/bootstrap.min.js"></script>



</body>
</html>
