<?php include 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        #my-account {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #my-account .mycard {
            box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.479);
            width: 50%;
            display: flex;
            border-radius: 7px;
        }

        #my-account .mycard .welcome-page {
            width: 50%;
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
            background: linear-gradient(to top left, #3E00B3, #6B00D7, #A230ED, #d86df3);
            padding: 27px 20px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        #my-account .mycard .welcome-page .head-text {
            padding: 5px;
            width: 100%;
        }

        #my-account .mycard .welcome-page .head-text .heading {
            margin: 0px;
        }

        #my-account .mycard .welcome-page .head-text .heading h2 {
            margin: 0px;
            text-align: center;
            line-height: 50px;
            font-size: 40px;
            text-transform: uppercase;
            font-family: "Cambria";
            font-weight: 700;
            color: white;
        }

        #my-account .mycard .welcome-page .head-text .para {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        #my-account .mycard .welcome-page .head-text .para p {
            font-size: 20px;
            font-weight: 400;
            font-family: "Cambria";
            width: 70%;
            text-align: center;
            margin: 0px;
            color: white;
        }

        #my-account .mycard .welcome-page .button {
            width: 100%;
            display: flex;
        }

        #my-account .mycard .welcome-page .button a {
            width: 100%;
            text-decoration: none;
            padding: 10px;
            font-size: 18px;
            font-family: "Cambria";
            font-weight: 600;
            border: 2px solid white;
            border-radius: 25px;
            color: #fff;
            background-color: transparent;
            text-align: center;
        }

        #my-account .mycard .myform {
            width: 50%;
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
            background-color: #ededed;
            padding: 25px 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        #my-account .mycard .myform .profile-pic {
            padding: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }

        #my-account .mycard .myform .profile-pic .myimage {
            border: 3px solid grey;
            padding: 3px;
            height: 25vh;
            width: 40%;
            border-radius: 10%;
            background-color: #fff;
        }

        #my-account .mycard .myform .profile-pic .myimage img {
            width: 100%;
            height: 100%;
            border-radius: 10%;
        }

        #my-account .mycard .myform form {
            margin: 0px;
            padding: 5px;
        }

        #my-account .mycard .myform form .myinfo {
            display: flex;
            flex-direction: column;
            margin-bottom: 13px;
        }

        #my-account .mycard .myform form .myinfo a {
            margin-top: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: #3E00B3;
            text-align: end;
        }

        #my-account .mycard .myform form .myinfo label {
            padding: 3px 0px;
            font-size: 18px;
            font-family: "Cambria";
            color: black;
        }

        #my-account .mycard .myform form .myinfo input {
            padding: 5px;
            font-size: 18px;
            font-family: "Cambria";
            border: 1px solid grey;
        }

        #my-account .mycard .myform form .myinfo #image {
            font-size: 14px !important;
            padding: 5px 0px;
            border: none !important;
        }

        #my-account .mycard .myform form .button {
            margin-top: 20px;
        }

        #my-account .mycard .myform form .button #reg-btn {
            width: 100%;
            padding: 10px 7px;
            font-size: 18px;
            font-family: "Cambria";
            font-weight: 600;
            background: linear-gradient(to top left, #3E00B3, #6B00D7);
            border: 2px solid #3E00B3;
            border-radius: 30px;
            color: white;
            transition: .7s;
        }

        #my-account .mycard .myform form .button #reg-btn:hover {
            background: transparent;
            border: 2px solid #3E00B3;
            color: #3E00B3;
        }
        #my-account .success-message{
            border: 3px solid green;
            padding: 15px 0px;
            width: 50%;
            border-radius: 10px;
            background-color: rgba(42, 191, 0, 0.5);
            margin-top: 20px;
        }
        #my-account .success-message p{
            font-size: 18px;
            font-family: "Cambria";
            font-weight: 600;
            color: green;
            margin: 0px;
            text-align: center;
            text-transform: uppercase;
        }
        #my-account .error-message{
            border: 3px solid red;
            padding: 15px 0px;
            width: 50%;
            border-radius: 10px;
            background-color: rgba(252, 77, 105, 0.8);
            margin-top: 20px;
        }
        #my-account .error-message p{
            font-size: 18px;
            font-family: "Cambria";
            font-weight: 600;
            color: red;
            text-align: center;
            margin: 0px;
            text-transform: uppercase;
        }
        #my-account .warning-message{
            border: 3px solid orange;
            padding: 15px 0px;
            width: 50%;
            border-radius: 10px;
            background-color: rgba(255, 209, 0, 0.53);
            margin-top: 20px;
        }
        #my-account .warning-message p{
            font-size: 18px;
            font-family: "Cambria";
            font-weight: 600;
            color: orange;
            text-align: center;
            margin: 0px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <section id="my-account">
        <div class="mycard">
            <div class="myform">
                <div class="profile-pic">
                    <div class="myimage">
                        <img src="Images/profile-pic.jpg" alt="">
                    </div>
                </div>
                <form action="" method="post">
                    <div class="myinfo">
                        <label>Email Address</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="myinfo">
                        <label>Password</label>
                        <input type="password" name="pass" id="pass">
                        <a href="forgot_password.php">Forgot Password?</a>
                    </div>
                    <div class="button">
                        <input type="submit" name="login-btn" id="reg-btn" value="LOGIN NOW">
                    </div>
                </form>
            </div>
            <div class="welcome-page">
                <div class="head-text">
                    <div class="heading">
                        <h2>Welcome To Login Page</h2>
                    </div>
                    <div class="para">
                        <p>Let's Register Yourself To Get The Better Experience</p>
                    </div>
                </div>
                <div class="button">
                    <a href="registration.php">GET REGISTER</a>
                </div>
            </div>
        </div>
        <?php
            if (isset($_POST['login-btn'])) {
                $newEmail = $_POST['email'];
                $newPassword = $_POST['pass'];
    
                $sql1 = "SELECT `profilepic` FROM `register` WHERE `email` = '$newEmail' AND `password` = '$newPassword'";
                $result1 = mysqli_query($db_connect, $sql1);
    
                $numRow1 = mysqli_num_rows($result1);

                if ($newEmail == "" || $newPassword == "") {
                    echo "
                        <div class='warning-message'>
                            <p>Input Value Missing! Please fill all the input fields</p>
                        </div>
                    ";
                } 
                elseif ($numRow1 > 0) {
                    $rowData1 = mysqli_fetch_assoc($result1);
                    echo "
                        <div class='success-message'>
                            <p>Login Successfully!</p>
                        </div>
                    ";
                    echo "<script>window.open('dashboard.php', '_self')</script>";
                } 
                else {
                    echo "
                        <div class='error-message'>
                            <p>Login Failed! Due to some error " . mysqli_error($db_connect) . "</p>
                        </div>
                    ";
                }
            }  
        ?>
    </section>

</body>

</html>