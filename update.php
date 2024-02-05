<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
                <form action="edit.php" method="post">
                    <table>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <h1>Registration</h1>
                                </center>
                            </td>
                        </tr>
                        <tr>

                            <input type="text" value="<?php echo $row['id'] ?>" name="e_id">

                            <td colspan="2"><input type="text" name="e_name" value="<?php echo $row['namee'] ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="email" name="e_email" id="email" value="<?php echo $row['email'] ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="e_number" id="number" value="<?php echo $row['contact'] ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button type="submit" name="update">Update</button>
                            </td>
                            <td><a href="view.php">Cancel</a></td>
                        </tr>
                    </table>
                </form>
                <?php
            }
        }
    }
    ?>
</body>

</html>
