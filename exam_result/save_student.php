<?php
// save_student.php - Process and save student data

include 'db.php';

// Initialize variables
$roll_no = $student_name = $php_marks = $mysql_marks = "";
$error_message = "";
$success = false;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $roll_no = trim($_POST['roll_no']);
    $student_name = trim($_POST['student_name']);
    $php_marks = trim($_POST['php_marks']);
    $mysql_marks = trim($_POST['mysql_marks']);
    
    // Server-side validation
    $errors = array();
    
    if (empty($roll_no)) {
        $errors[] = "Roll No cannot be empty.";
    }
    
    if (empty($student_name)) {
        $errors[] = "Student Name cannot be empty.";
    }
    
    if (!is_numeric($php_marks) || $php_marks < 0 || $php_marks > 100) {
        $errors[] = "PHP Marks must be between 0 and 100.";
    }
    
    if (!is_numeric($mysql_marks) || $mysql_marks < 0 || $mysql_marks > 100) {
        $errors[] = "MySQL Marks must be between 0 and 100.";
    }
    
    // If no errors, proceed with insertion
    if (empty($errors)) {
        // Calculate total and average
        $total = $php_marks + $mysql_marks;
        $average = $total / 2;
        
        // Determine result
        if ($average >= 40) {
            $result = "Pass";
        } else {
            $result = "Fail";
        }
        
        // Prepare SQL statement to check if roll_no exists
        $check_sql = "SELECT id FROM students WHERE roll_no = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("s", $roll_no);
        $check_stmt->execute();
        $check_stmt->store_result();
        
        if ($check_stmt->num_rows > 0) {
            $error_message = "Error: Roll No '$roll_no' already exists. Please use a unique Roll No.";
        } else {
            // Prepare SQL statement for insertion
            $insert_sql = "INSERT INTO students (roll_no, student_name, php_marks, mysql_marks, total, average, result) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("ssiidds", $roll_no, $student_name, $php_marks, $mysql_marks, $total, $average, $result);
            
            if ($insert_stmt->execute()) {
                $success = true;
            } else {
                $error_message = "Error inserting data: " . $conn->error;
            }
            
            $insert_stmt->close();
        }
        
        $check_stmt->close();
    } else {
        // Display validation errors
        $error_message = implode("<br>", $errors);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Save Student Result</title>
</head>
<body>
    <h1>Save Student Result</h1>
    
    <?php if ($success): ?>
        <h2>Student Record Saved Successfully!</h2>
        <h3>Student Details:</h3>
        <p>
            <strong>Roll No:</strong> <?php echo htmlspecialchars($roll_no); ?><br>
            <strong>Student Name:</strong> <?php echo htmlspecialchars($student_name); ?><br>
            <strong>PHP Marks:</strong> <?php echo htmlspecialchars($php_marks); ?><br>
            <strong>MySQL Marks:</strong> <?php echo htmlspecialchars($mysql_marks); ?><br>
            <strong>Total:</strong> <?php echo $total; ?><br>
            <strong>Average:</strong> <?php echo number_format($average, 2); ?><br>
            <strong>Result:</strong> <?php echo $result; ?>
        </p>
        <br>
        <a href="add_student.php">Add Another Student</a>
        <br>
        <a href="students.php">View All Results</a>
        <br>
        <a href="index.php">Home</a>
        
    <?php else: ?>
        <h2 style="color: red;">Error:</h2>
        <p><?php echo $error_message; ?></p>
        <br>
        <a href="add_student.php">Go Back to Add Student</a>
        <br>
        <a href="index.php">Home</a>
    <?php endif; ?>
</body>
</html>