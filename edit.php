<?php
session_start();
include('conn.php');

if (isset($_POST['update'])) {
    $id = $_POST['e_id'];
    $name = $_POST['e_name'];
    $email = $_POST['e_email'];
    $number = $_POST['e_number'];
    $company = $_POST['e_company'];
    $city = $_POST['e_city'];
    $msg = $_POST['e_msg'];

    $upd = "UPDATE contact SET namee = '$name', email= '$email', contact='$number', company='$company',city='$city',msg='$msg' WHERE id='$id'";
    $runn = mysqli_query($conn, $upd);

    if ($runn) {
        $_SESSION['success'] = "entered";
        header('Location:view.php');
    } else {
        echo "fail to enter data";
    }
}

?>