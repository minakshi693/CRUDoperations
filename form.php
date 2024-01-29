<html>
    <title>
       Form
    </title>
    <head>
    <style>
        body{
            padding: 10px;
            margin: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        
        button[type="submit"]
        {
            padding: 5px 30px;
            border-radius: 20px;
            background-color: darksalmon;

        }

        </style>

    <body>
        <form method="post">
            
              <div class="main">  
            Name:  <input  type="text" name="namee" value="" id="name" required><br><br>
            Email: <input   type="email" name="email" value="" id="email" required><br><br>
            Contact:<input type = "text" name="contact" value="" id="contact" maxlength="10" required><br><br>
            

</div>


<button type="submit" name="submit" class="submit">Register</button>
            
        </form>

</head>
</body>
</html>

<?php
include('conn.php');
error_reporting(0);

// submit success
session_start();
if($_SESSION['submit']==$_POST['submit'] &&
    isset($_SESSION['submit'])) {
$namee = $_POST['namee'];
$email =$_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO `contact` VALUES('', '$namee', '$email', '$contact')";

$result = mysqli_query($conn, $sql);
if($result){
    echo "Your data added!";
}
else{
    echo "Failed!";
}

} 

else{
    $_SESSION['submit'] = $_POST['submit'];
}


?>
