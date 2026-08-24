<?php
// students.php - Display all student records

include 'db.php';

// Query to get all students
$sql = "SELECT roll_no, student_name, php_marks, mysql_marks, total, average, result FROM students ORDER BY roll_no";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Results</title>
</head>
<body>
    <h1>Student Examination Results</h1>
    
    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>PHP Marks</th>
                    <th>MySQL Marks</th>
                    <th>Total</th>
                    <th>Average</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['roll_no']); ?></td>
                        <td><?php echo htmlspecialchars($row['student_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['php_marks']); ?></td>
                        <td><?php echo htmlspecialchars($row['mysql_marks']); ?></td>
                        <td><?php echo htmlspecialchars($row['total']); ?></td>
                        <td><?php echo number_format($row['average'], 2); ?></td>
                        <td><?php echo htmlspecialchars($row['result']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No student records found.</p>
    <?php endif; ?>
    
    <br>
    <a href="index.php">Home</a>
    <br>
    <a href="add_student.php">Add New Student</a>
</body>
</html>