<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .main {
            width: 80%;
            max-width: 500px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block; 
            margin-bottom: 8px;
            font-weight: bold;
            color: #xxx;
        }

        input[type="text"],
        input[type="email"]
         {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus
         {
            outline: none;
            border-color: #3498dc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border-radius: 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #c0392b;
        }

        .show-btn {
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 20px;
            background-color: #2ecc71;
            color: #fff;
            font-size: 16px;
            border: none;
            margin-top: 10px;
            /* transition: background-color 0.3s; */
        }

        .register-success {
            color: #27ae60;
            font-weight: bold;
        }

        .register-failure {
            color: #e74c3c;
            font-weight: bold;
        }

        /* @media (max-width: 600px) {
            .main {
                padding: 20px;
            }
        } */
    </style>
</head>

<body>
    <form method="post" class="main">

    <div class="main">
    <label for="name">Full Name:</label>
        <input type="text" name="namee" id="name" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required>

        <label for="contact">Contact Number:</label>
        <input type="text" name="contact" id="contact" maxlength="10" required>
    </div>


    <input type="submit" name="submit" value="Register">
        <a href="view.php" class="show-btn">SHOW</a>
    </form>

    </head>
</body>

</html>

<?php
include('conn.php');
error_reporting(0);

// submit success
session_start();
if (
    $_SESSION['submit'] == $_POST['submit'] &&
    isset($_SESSION['submit'])
) {
    $namee = $_POST['namee'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO `contact` VALUES('', '$namee', '$email', '$contact')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<p class='register-success'>Registration Successful!</p>";
    } else {
        echo "<p class='register-failure'>Registration Failed. Please try again.</p>";
    }

} else {
    $_SESSION['submit'] = $_POST['submit'];
}


?>