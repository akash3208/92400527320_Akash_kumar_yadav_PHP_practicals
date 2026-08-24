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
