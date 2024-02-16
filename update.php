<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
            margin: 70px;
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
            float: left;
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

        button {
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


       
    </style>
</head>

<body>
    <?php
    include('conn.php');
    error_reporting(0);
    if (isset($_POST['edit_btn'])) {
        $id = $_POST['edit_ids'];

        $fetch = "SELECT * FROM contact where id='$id' ";
        $runn = mysqli_query($conn, $fetch);



        if (mysqli_num_rows($runn) > 0) {
            while ($row = mysqli_fetch_assoc($runn)) {

                ?>
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
                <div class="form-content">
                        
                    <form method="post" action="edit.php" class="main">
        <div class="heading">
            <h1>Update form</h1>
        </div>
        <div class="row">
        <div class="col-25"><label for="id">ID:</label>
        <div class="col-75"><input type="text" value="<?php echo $row['id'] ?>" name="e_id" required>
        <div class="row">
            <div class="col-25"><label for="name">Name</label></div>
            <div class="col-75"><input type="text"  name="e_name" value="<?php echo $row['namee'] ?>" required
                    autocomplete="off"></div>
        </div>
        <div class="row">
            <div class="col-25"><label for="email">Email </label></div>
            <div class="col-75"><input type="email" name="e_email" id="email" value="<?php echo $row['email'] ?>" required
                    autocomplete="off"></div>
        </div>
        <div class="row">
            <div class="col-25"><label for="contact">Mobile No.</label></div>
            <div class="col-75"><input type="text" name="e_number" id="number" value="<?php echo $row['contact'] ?>"pattern="[0-9]{10}"
                    maxlength="10" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-25"><label for="company">Company Name</label></div>
            <div class="col-75"><input type="text" name="e_company" id="company"
                                        value="<?php echo $row['company'] ?>" required
                    autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-25"><label for="city">City</label></div>
            <div class="col-75"><input type="text" name="e_city" id="city" value="<?php echo $row['city'] ?>" required
                    autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-25"><label for="msg">Your requirement</label></div>
            <div class="col-75"><input type="text" name="e_msg" id="msg" value="<?php echo $row['msg'] ?>"
                    required autocomplete="off">
            </div>
        </div>
        <div class="row">
        <button type="submit" name="update"><a href="view.php">Update</button>
            <button><a href="view.php">Cancel</a></button>
        </div>


    </form>
                    <?php
            }
        }
    }
    ?>
</body>

</html>