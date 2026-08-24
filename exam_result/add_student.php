<?php
// add_student.php - Form to add student results
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student Result</title>
</head>
<body>
    <h1>Add Student Result</h1>
    
    <form action="save_student.php" method="POST">
        <label for="roll_no">Roll No:</label><br>
        <input type="text" id="roll_no" name="roll_no" required><br><br>
        
        <label for="student_name">Student Name:</label><br>
        <input type="text" id="student_name" name="student_name" required><br><br>
        
        <label for="php_marks">PHP Marks (0-100):</label><br>
        <input type="number" id="php_marks" name="php_marks" min="0" max="100" required><br><br>
        
        <label for="mysql_marks">MySQL Marks (0-100):</label><br>
        <input type="number" id="mysql_marks" name="mysql_marks" min="0" max="100" required><br><br>
        
        <input type="submit" value="Save Result">
    </form>
    
    <br>
    <a href="index.php">Home</a>
    <br>
    <a href="students.php">View Results</a>
</body>
</html>