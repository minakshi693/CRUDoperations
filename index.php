<?php


session_start();
include("conn.php");
error_reporting(0);

// submit success

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namee = $_POST['namee'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $company = $_POST['company'];
    $city = $_POST['city'];
    $msg = $_POST['msg'];


    $sql = "INSERT INTO `contact` VALUES('', '$namee', '$email', '$contact', '$company', '$city', '$msg')";

    $result = mysqli_query($conn, $sql);
    if ($result) {

        //echo '<meta http-equiv="refresh" content="5,http://localhost/mini/demo/index.php>';

        echo '<script>alert("Registration successful!")</script>';
        header('Location: viewuser.php');
        exit();

    } else {

        echo '<script>alert("Registration failed!")</script>';



    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:300,400,600|Open+Sans:300,400);

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: auto;
        }



        nav li {
            list-style: none;
            display: inline-block;
            padding: 20px;
        }

        .nav-links {
            text-align: right;
            width: -45%;
            margin: 5px
        }

        li a:hover {
            background-color: #F9F7C9;
        }

        .logo {
            float: inline-start;
            text-align: left;
            width: 45%;
        }

        .logo img {
            width: 140px;
            height: 72px;
        }

        .banner img {
            width: 100%;
            height: auto;


        }

        h1 {
            margin: auto;
        }

        .main {
            width: 40%;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2 1 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            max-height: 700px;
            flex: 1;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            float: right;
            
        }

        label {
            display: inline-block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            width: 40%;
        }

        input[type="text"],
        input[type="email"],
        input[type="text"],
        input[type="submit"] {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            vertical-align: right;
            display: inline-block;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            margin: auto;
        }



        input[type="submit"]:hover {
            background-color: #0056b3;

        }

        @media only screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }


            .map-container {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            margin: auto;
        }

        a {

            text-decoration: none;
        }

        .map-container {
            left: 20px;
            padding-left: 10%;  
            padding-top: 10%;
            height: 350px; 
        }
        
    </style>
</head>

<body>

    <header>
        <div class="logo">
            <img src="ms.png" alt="Logo" width="140px" height="72px">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Domain</a></li>
                <li><a href="#">Hosting</a></li>
                <li><a href="#">Web Designing</a></li>
                <li><a href="#">Add ons</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="banner">
            <img src="ban.png" alt="Banner">
        </div>
    </div>

    <form method="post" class="main">
        <div class="heading">
            <h1>Registration</h1>
        </div>
        <div class="row">
            <div class="col-25"><label for="name">Name</label></div>
            <div class="col-75"><input type="text" id="name" name="namee" placeholder="Your Name" required
                    autocomplete="off"></div>
        </div>
        <div class="row">
            <div class="col-25"><label for="email">Email </label></div>
            <div class="col-75"><input type="email" id="email" name="email" placeholder="Your Email ID" required
                    autocomplete="off"></div>
        </div>
        <div class="row">
            <div class="col-25"><label for="contact">Mobile No.</label></div>
            <div class="col-75"><input type="text" id="mobile" name="contact" placeholder="Your Mobile Number"
                    maxlength="10" pattern="[0-9]{10}" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-25"><label for="company">Company Name</label></div>
            <div class="col-75"><input type="text" id="company" name="company" placeholder="Your Company Name" required
                    autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-25"><label for="city">City</label></div>
            <div class="col-75"><input type="text" id="city" name="city" placeholder="Your City" required
                    autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-25"><label for="msg">Your requirement</label></div>
            <div class="col-75"><input type="text" id="msg" name="msg" placeholder="Tell us about your requirements"
                    required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit" name="submit">
            </a>

        </div>


    </form>
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.928206281476!2d73.132206!3d22.3185548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc85fb31e30f1%3A0x8bcd6241fb622173!2sRaama%20Esquire!5e0!3m2!1sen!2sin!4v1707284499321!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="edit">
        <button><a href="view.php">UPDATE</a></button>
</body>


</html>