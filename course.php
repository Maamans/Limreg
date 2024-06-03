<?php
include "connect.php";

if (isset($_POST['submit'])){
    $coursename = $_POST['coursename'];
    $coursecode = $_POST['coursecode'];
    $coursedes = $_POST['coursedes'];
    $instructname = $_POST['instructorname'];
    $classsche = $_POST['classsche'];
    $coursefees = $_POST['coursefees'];
    $prerequisites = $_POST['prerequisites'];
    $addcomm = $_POST['addcomm'];
    $regas = $_POST['regas'];

    $sql = "INSERT INTO course(coursename, coursecode, coursedes, instructname, classsche, coursefees, prerequisites, addcomm, regas)
    VALUES('$coursename', '$coursecode', '$coursedes', '$instructorname', '$classsche', '$coursefees', '$prerequisites', '$addcomm', '$regas')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('You have registered a course');
                window.location.href='coursedis.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-container">
        <img style="align-items: center;" src="images/limkok.png" alt="Logo">

        <h2 style="text-align: center;">Course Management Form</h2>
        <form method="POST" action="course.php">
            <!-- Course Information -->
            <label for="course-name">Course Name</label>
            <input type="text" id="course-name" name="coursename" placeholder="Course Title" onfocus="clearPlaceholder(this)" required><br>
            
            <label for="course-code">Course Code</label>
            <input type="text" id="course-code" name="coursecode" placeholder="CSE101" onfocus="clearPlaceholder(this)" required><br>
            
            <label for="course-description">Course Description</label>
            <textarea id="course-description" name="coursedes" placeholder="Brief description of the course" onfocus="clearPlaceholder(this)" required></textarea><br>
            
            <label for="instructor-name">Instructor Name</label>
            <input type="text" id="instructor-name" name="instructname" placeholder="Instructor Name" onfocus="clearPlaceholder(this)" required><br>
            
            <label for="schedule">Class Schedule</label>
            <input type="text" id="schedule" name="classsche" placeholder="MWF 9-10 AM" onfocus="clearPlaceholder(this)" required><br>
            
            <label for="fees">Course Fees</label>
            <input type="text" id="fees" name="coursefees" placeholder="$500" onfocus="clearPlaceholder(this)" required><br>
            
            <label for="prerequisites">Prerequisites</label>
            <input type="text" id="prerequisites" name="prerequisites" placeholder="Course prerequisites (if any)" onfocus="clearPlaceholder(this)"><br>
            
            <label for="comments">Additional Comments/ Requirements</label>
            <textarea id="comments" name="addcomm" placeholder="Any additional comments or requirements" onfocus="clearPlaceholder(this)"></textarea><br>
            
            <!-- Password and Role -->
            <label for="role">Register as:</label>
            <select id="role" name="regas">
                <option value="course_manager">Course Manager</option>
                <option value="instructor">Instructor</option>
            </select><br>
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
