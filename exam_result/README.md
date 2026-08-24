Step 1: Create the Database Using phpMyAdmin

Open your web browser

Type this in the address bar: http://localhost/phpmyadmin

Press Enter

You'll see the phpMyAdmin interface

Look for "New" on the left sidebar

Click it

In the "Database name" field, type: exam_result_db

In "Collation" dropdown, select: utf8_general_ci

Click the Create button

The database is now created.



Step 2: Create the Students Table

In phpMyAdmin, click on exam_result_db in the left sidebar

Click the "SQL" tab at the top

Copy and paste the complete table creation query:

sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(20) NOT NULL UNIQUE,
    student_name VARCHAR(100) NOT NULL,
    php_marks INT NOT NULL,
    mysql_marks INT NOT NULL,
    total INT NOT NULL,
    average DECIMAL(5,2) NOT NULL,
    result VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
