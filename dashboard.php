<?php include 'db-connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Dashboard</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        #navbar{
            background: linear-gradient(to top, #6B00D7, #A230ED);
            margin-bottom: 10px;
        }
        #navbar .main-head{
            margin: 0px;
        }
        #navbar .button{
            display: flex;
            align-items: center;
            justify-content: end;
        }
        #navbar .button .logoutBtn{
            margin: 0px;
            padding: 10px;
        }
        #navbar .button .logoutBtn a{
            text-decoration: none;
            font-size: 20px;
            font-family: "cambria";
            font-weight: 600;
            color: white;
            text-align: end;
            border: 1px solid white;
            padding: 10px 20px;
            margin: 0px;
            transition: .7s;
            border-radius: 5px;
        }
        #navbar .button .logoutBtn a:hover{
            background-color: white;
            color: #6B00D7;
            border: 1px solid white;
            transition: .7s;
        }
        #navbar .main-head .heading{
            margin: 0px;
        }
        #navbar .main-head .heading h2{
            font-size: 45px;
            font-family: "Cambria";
            font-weight: 600;
            color: white;
            margin: 0px;
            text-align: end;
            padding: 10px 0px;
        }
        #register-detail{
            /* border: 1px solid black; */
            margin: 0px;
        }
        #register-detail .row{
            display: flex;
            justify-content: space-between;
        }
        #register-detail .mycard{
            border: 1px solid grey;
            width: 30%;
            /* height: 30vh; */
            padding: 25px 20px;
            margin: 20px 0px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.65);
        }
        #register-detail .mycard .image{
            /* border: 1px solid black; */
            margin-bottom: 20px;
            padding: 5px;
            display: flex;
            justify-content: center;
        }
        #register-detail .mycard .image .pic{
            border: 2px solid grey;
            width: 45%;
            height: 30vh;
            padding: 3px;
            border-radius: 5px;
            background-color: white;
        }
        #register-detail .mycard .image .pic img{
            width: 100%;
            height: 100%;
            border-radius: 5px;
        }
        #register-detail .mycard .detail{
            /* border: 1px solid black; */
            padding: 5px;
            margin-bottom: 20px;
        }
        #register-detail .mycard .detail h3{
            /* border: 1px solid black; */
            margin: 0px;
            font-size: 20px;
            font-family: "cambria";
            font-weight: 600;
            color: black;
            padding: 3px 0px;
        }
        #register-detail .mycard .detail p{
            /* border: 1px solid black; */
            margin: 0px;
            font-size: 20px;
            font-family: "cambria";
            font-weight: 400;
            color: black;
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main-head">
                    <div class="heading">
                        <h2>REGISTERED USERS FORM DETAILS</h2>
                    </div>
                </div>
                <div class="col-md-3 button">
                    <div class="logoutBtn">
                        <a href="registration.php">LOG OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="register-detail">
        <div class="container">
            <div class="row">
                <?php
                    $sql2 = "SELECT * FROM `register`";
                    $result2 = mysqli_query($db_connect, $sql2);

                    $numRow2 = mysqli_num_rows($result2);

                    while ($rowData2 = mysqli_fetch_assoc($result2)) {
                        
                        echo "
                            <div class='mycard col-md-3'>
                                <div class='image'>
                                    <div class='pic'>
                                        <img src='{$rowData2['profilepic']}' alt=''>
                                    </div>
                                </div>
                                <div class='detail'>
                                    <h3>Name:</h3>
                                    <p>" . $rowData2['name'] . "</p>
                                </div>
                                <div class='detail'>
                                    <h3>Email Address:</h3>
                                    <p>" . $rowData2['email'] . "</p>
                                </div>
                                <div class='detail'>
                                    <h3>Password:</h3>
                                    <p>" . $rowData2['password'] . "</p>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>