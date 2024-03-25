<?php include 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration Page</title>
    <link rel="stylesheet" href="registration.css">
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
            /* border: 1px solid black; */
            box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.479);
            width: 50%;
            display: flex;
            border-radius: 7px;
        }

        #my-account .mycard .welcome-page {
            width: 50%;
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
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
            /* border: 1px solid white; */
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
            /* border: 1px solid white; */
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
            /* height: 50vh; */
            border-top-right-radius: 7px;
            border-bottom-right-radius: 7px;
            /* background-color: rgb(245, 245, 245); */
            background-color: #ededed;
            padding: 25px 15px;
        }

        #my-account .mycard .myform form {
            margin: 0px;
            padding: 5px;
        }

        #my-account .mycard .myform form {
            margin: 0px;
        }

        #my-account .mycard .myform form .myinfo {
            display: flex;
            flex-direction: column;
            margin-bottom: 13px;
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
            margin-top: 30px;
        }

        #my-account .mycard .myform form .button #reg-btn {
            width: 100%;
            padding: 10px 7px;
            font-size: 18px;
            font-family: "Cambria";
            font-weight: 600;
            background: linear-gradient(to top left, #3E00B3, #6B00D7);
            border: 1px solid blue;
            border-radius: 30px;
            color: white;
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
            /* background-color: rgba(248, 111, 133, 0.8); */
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
            /* background-color: rgba(248, 111, 133, 0.8); */
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
            <div class="welcome-page">
                <div class="head-text">
                    <div class="heading">
                        <h2>Welcome To Registration Page</h2>
                    </div>
                    <div class="para">
                        <p>Keep Connected With Us Please Login With Your Credientials</p>
                    </div>
                </div>
                <div class="button">
                    <a href="login.php
                    ">SIGN IN NOW</a>
                </div>
            </div>
            <div class="myform">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="myinfo">
                        <label>ID</label>
                        <input type="text" name="id" id="id">
                    </div>
                    <div class="myinfo">
                        <label>Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="myinfo">
                        <label>Email Address</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="myinfo">
                        <label>Password</label>
                        <input type="password" name="pass" id="pass">
                    </div>
                    <div class="myinfo">
                        <label>Profile Picture</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="button">
                        <input type="submit" name="reg-btn" id="reg-btn" value="REGISTER NOW">
                    </div>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['reg-btn'])) {
                // File upload handling
                $filename = $_FILES["image"]["name"];
                $tempname = $_FILES["image"]["tmp_name"];
                $folder = "Images/" . $filename;
                move_uploaded_file($tempname, $folder);

                // Data retrieval
                $user_id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['pass'];

                // SQL query to insert data into the database
                $sql = "INSERT INTO `register` (`user_id`, `name`, `email`, `password`, `profilepic`) VALUES ('$user_id', '$name', '$email', '$password', '$folder')";

                // Executing the query
                $result = mysqli_query($db_connect, $sql);

                // Checking if insertion was successful
                if($user_id == "" || $name == "" || $email == "" || $password == "" || $folder == ""){
                    echo "
                        <div class='warning-message'>
                            <p>Input Value Missing! Please fill all the input fields</p>
                        </div>
                    ";
                }
                elseif($result) {
                    // echo "Registered Successfully";
                    echo "
                        <div class='success-message'>
                            <p>Registered Successfully</p>
                        </div>
                    ";
                } else {
                    echo "
                        <div class='error-message'>
                            <p>Registration Failed! Due to some error " . mysqli_error($db_connect) . "</p>
                        </div>
                    ";
                }
            }
        ?>
    </section>

</body>

</html>