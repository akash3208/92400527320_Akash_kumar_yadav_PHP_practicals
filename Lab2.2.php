#2. Create a function named studentDetails() that accepts: Student Name Enrollment Number Semester

<?php
function studentDetails($name, $enrollment, $semester)
{
    echo "Student Name: $name\n";
    echo "Enrollment Number: $enrollment\n";
    echo "Semester: $semester";
}

studentDetails("Akash Kumar Yadav", "123456", "5");
?>