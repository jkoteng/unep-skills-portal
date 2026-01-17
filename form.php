<?php include('db.php'); 
if(isset($_POST['submit'])) {
    $index = $_POST['index_number'];
    $name = $_POST['full_names'];
    $email = $_POST['email'];
    $loc = $_POST['current_location'];
    $edu = $_POST['education_level'];
    $duty = $_POST['duty_station'];
    $remote = $_POST['remote_work'];
    $soft = $_POST['software_expertise'];
    $level = $_POST['expertise_level'];
    $lang = $_POST['language'];
    $resp = $_POST['responsibility_level'];

    $sql = "INSERT INTO staff (index_number, full_names, email, current_location, education_level, duty_station, remote_work, software_expertise, expertise_level, language, responsibility_level) 
            VALUES ('$index', '$name', '$email', '$loc', '$edu', '$duty', '$remote', '$soft', '$level', '$lang', '$resp')";
    
    if(mysqli_query($conn, $sql)) { header("Location: index.php"); }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Staff</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Input Staff Information</h2>
    <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <label>Index Number</label><input type="text" name="index_number" class="form-control" required>
                <label>Full Names</label><input type="text" name="full_names" class="form-control" required>
                <label>Email</label><input type="email" name="email" class="form-control" required>
                <label>Current Location</label><input type="text" name="current_location" class="form-control">
                <label>Highest Education</label><input type="text" name="education_level" class="form-control">
            </div>
            <div class="col-md-6">
                <label>Duty Station</label><input type="text" name="duty_station" class="form-control">
                <label>Remote Work Available?</label>
                <select name="remote_work" class="form-control"><option>Yes</option><option>No</option></select>
                <label>Software Expertise</label><input type="text" name="software_expertise" class="form-control">
                <label>Software Level</label><input type="text" name="expertise_level" class="form-control">
                <label>Language</label><input type="text" name="language" class="form-control">
                <label>Responsibility Level</label><input type="text" name="responsibility_level" class="form-control">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success mt-3">Save Staff Member</button>
    </form>
</body>
</html>