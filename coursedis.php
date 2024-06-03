<?php

include("connect.php");


// Fetching data for the table
$query = "SELECT * FROM course ORDER BY id DESC";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="bg-success p-2 text-white">
        <h1 align="center">Course Management</h1>
        <a href="logout.php" class="btn btn-primary text-bg-light">Logout</a>
    </div>
    <div class="bg-success p-2 text-white" style="--bs-bg-opacity: .5;">
        <div class="mx-auto p-2" style="width: 200px;">
        </div>

        <!-- Table to display course management information -->
        <h1 align="center">COURSE MANAGEMENT INFORMATION</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">Instructor Name</th>
                    <th scope="col">Class Schedule</th>
                    <th scope="col">Course Fees</th>
                    <th scope="col">Prerequisites</th>
                    <th scope="col">Additional Comments</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['coursename']; ?></td>
                        <td><?php echo $row['coursecode']; ?></td>
                        <td><?php echo $row['coursedes']; ?></td>
                        <td><?php echo $row['instructname']; ?></td>
                        <td><?php echo $row['classsche']; ?></td>
                        <td><?php echo $row['coursefees']; ?></td>
                        <td><?php echo $row['prerequisites']; ?></td>
                        <td><?php echo $row['addcomm']; ?></td>
                        <td><?php echo $row['regas']; ?></td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
