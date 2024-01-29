<?php
session_start();
include('conn.php');

if(isset($_POST['update'])){
    $id = $_POST['e_id'];
    $name = $_POST['e_name'];
    $email = $_POST['e_email'];
    $number = $_POST['e_number'];
    $upd = "UPDATE contact SET namee = '$name', email= '$email', contact='$number' WHERE id='$id'";
    $runn = mysqli_query($conn, $upd);

    if($runn){
        $_SESSION['success']="entered";
        header('Location:viewport.php');
    }
    else{
        echo "fail to enter data";
    }
}

?>