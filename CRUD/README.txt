===========================================
  PHP CRUD Application Setup Guide
  Using XAMPP
===========================================

📋 REQUIREMENTS:
- XAMPP (Apache + MySQL + PHP)
- Web Browser

🔧 STEP-BY-STEP SETUP:

1. INSTALL XAMPP
   - Download XAMPP from: https://www.apachefriends.org/
   - Install it on your computer

2. START SERVICES
   - Open XAMPP Control Panel
   - Click "Start" for Apache
   - Click "Start" for MySQL

3. CREATE DATABASE
   - Open browser and go to: http://localhost/phpmyadmin
   - Click "New" in the left sidebar
   - Database name: crud_db
   - Charset: utf8_general_ci
   - Click "Create"

   - OR use SQL:
   CREATE DATABASE crud_db;
   USE crud_db;

4. COPY FILES
   - Create folder: C:\xampp\htdocs\crud-app
   - Copy all PHP files (index.php, config.php, functions.php, style.css) 
     to this folder

5. RUN APPLICATION
   - Open browser and go to: http://localhost/crud-app/
   - You should see the CRUD interface

6. TEST CRUD OPERATIONS
   ✓ Add: Fill form and click "Add User"
   ✓ Read: View users in table
   ✓ Update: Click "Edit" on any user, modify, and click "Update"
   ✓ Delete: Click "Delete" and confirm

🛠️ TROUBLESHOOTING:

If you get connection errors:
1. Check MySQL is running in XAMPP
2. Verify credentials in config.php:
   - DB_HOST: localhost
   - DB_USER: root
   - DB_PASS: (empty by default)
3. Create database if not exists

If table not created:
- The table is automatically created when you first run index.php
- Or manually create it using:
  
  CREATE TABLE users (
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(100) NOT NULL,
      email VARCHAR(100) NOT NULL UNIQUE,
      phone VARCHAR(20),
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );

📁 PROJECT STRUCTURE:
crud-app/
├── index.php      # Main application
├── config.php     # Database configuration
├── functions.php  # All CRUD functions
├── style.css      # CSS styles
└── README.txt     # This file
