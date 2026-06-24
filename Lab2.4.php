#4. To verify whether a function exists before calling it. Create a function named welcomeStudent(). Use function_exists() to check its existence. If the function exists, call it. Otherwise display an error message.

<?php
function welcomeStudent()
{
    echo "Welcome Student!";
}

if (function_exists("welcomeStudent"))
{
    welcomeStudent();
}
else
{
    echo "Error: Function does not exist.";
}
?>