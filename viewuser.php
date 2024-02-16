<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>viewport</title>
    <style>
        h1 {
            font-size: 24px;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 10px;
            margin: 10px;


        }

        @media screen and (max-width: 600px) {
            tr {
                display: block;
            }

            td {
                display: block;
                width: 100%;
            }
        }


        table {
            width: 100%;
            margin: 20px;
            border-collapse: collapse;
        }

        button {
            font-size: 14px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #FFD0EC;
            box-sizing: border-box;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 10px;
        }

        button:hover {
            background-color: #7FC7D9;
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
            background-color: #F5EEE6;
        }

        button {
            box-sizing: border-box;
        }
    </style>


</head>

<body>
    <table>
        <h1>Customer Records</h1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Company</th>
            <th>City</th>
            <th>Requirement</th>
        </tr>

        <?php
        include("conn.php");
        error_reporting(0);
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {

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
                    <td>
                        <?php echo $row["company"]; ?>
                    </td>
                    <td>
                        <?php echo $row["city"]; ?>
                    </td>
                    <td>
                        <?php echo $row["msg"]; ?>
                    </td>
                    
                        
                <?php
            }
        } else {
            // echo "Found No Data";
        }
        ?>
    </table>
    
</body>

</html>