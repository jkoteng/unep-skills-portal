<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>UNEP Staff Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Staff Listing</h2>
    <a href="form.php" class="btn btn-primary mb-3">Add New Staff</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Index</th>
                <th>Full Names</th>
                <th>Email</th>
                <th>Location</th>
                <th>Duty Station</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM staff");
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['index_number']}</td>
                    <td>{$row['full_names']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['current_location']}</td>
                    <td>{$row['duty_station']}</td>
                    <td>
                        <a href='#' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='#' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>