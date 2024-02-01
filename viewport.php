<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewport</title>
    <style>
        table {
            width: 100%;
            margin: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f8f8f8f8;
        }

        tr:hover {
            background-color: #566585;
        }
    </style>


</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Update</th>
        </tr>

        <?php
        include("conn.php");
        error_reporting(0);
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td>
                        <?php echo $row["id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["namee"]; ?>
                    </td>
                    <td>
                        <?php echo $row["email"]; ?>
                    </td>
                    <td>
                        <?php echo $row["contact"]; ?>
                    </td>
                    <input type="hidden" name="del_id" class="del_id">
                    <td>
                        <form action="update.php" method="post">
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="edit_ids">
                            <button type="submit" name="edit_btn">Edit</button>
                        </form>
                        <?php echo "<button class='del_btn'><a href='delete.php? i=$row[id]' onclick='return checkdelet()'>Delete</a></button"; ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            // echo "Found No Data";
        }
        ?>
    </table>

</body>

</html>