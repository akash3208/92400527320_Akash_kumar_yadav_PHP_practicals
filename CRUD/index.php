<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$host = 'localhost';
$dbname = 'crud_db';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// Create table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

// Handle CRUD Operations
$message = '';
$messageType = '';

// CREATE - Add User
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);
    
    if ($stmt->execute()) {
        $message = "✅ User added successfully!";
        $messageType = "success";
    } else {
        $message = "❌ Error: " . $stmt->error;
        $messageType = "error";
    }
    $stmt->close();
}

// UPDATE - Edit User
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $phone, $id);
    
    if ($stmt->execute()) {
        $message = "✅ User updated successfully!";
        $messageType = "success";
    } else {
        $message = "❌ Error: " . $stmt->error;
        $messageType = "error";
    }
    $stmt->close();
}

// DELETE - Remove User
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $message = "✅ User deleted successfully!";
        $messageType = "success";
    } else {
        $message = "❌ Error: " . $stmt->error;
        $messageType = "error";
    }
    $stmt->close();
}

// Get all users
$result = $conn->query("SELECT * FROM users ORDER BY id DESC");

// Get user for editing
$editUser = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editResult = $conn->query("SELECT * FROM users WHERE id=$id");
    if ($editResult->num_rows > 0) {
        $editUser = $editResult->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD with MySQL</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f7fc;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            background: white;
            padding: 30px 35px;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #1e293b;
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 25px;
            letter-spacing: -0.5px;
        }

        h1 span {
            background: #2563eb;
            color: white;
            padding: 2px 12px;
            border-radius: 30px;
            font-size: 16px;
            margin-left: 8px;
        }

        /* Form styles */
        .form-wrapper {
            background: #f8fafc;
            padding: 22px 25px;
            border-radius: 14px;
            margin-bottom: 30px;
            border: 1px solid #e9edf2;
        }

        .form-title {
            font-size: 18px;
            font-weight: 600;
            color: #0f172a;
            margin-bottom: 16px;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            align-items: flex-end;
        }

        .form-group .field {
            flex: 1 1 180px;
            min-width: 150px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #334155;
            margin-bottom: 4px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #d1d9e6;
            border-radius: 10px;
            font-size: 14px;
            background: white;
            transition: 0.2s;
        }

        .form-group input:focus {
            border-color: #2563eb;
            outline: none;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .btn {
            padding: 10px 22px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: 0.2s;
            background: #e9edf2;
            color: #1e293b;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            text-decoration: none;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }
        .btn-primary:hover {
            background: #1d4ed8;
            transform: scale(0.98);
        }

        .btn-success {
            background: #16a34a;
            color: white;
        }
        .btn-success:hover {
            background: #15803d;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }
        .btn-danger:hover {
            background: #b91c1c;
        }

        .btn-warning {
            background: #eab308;
            color: #1e293b;
        }
        .btn-warning:hover {
            background: #ca8a04;
            color: white;
        }

        .btn-sm {
            padding: 6px 14px;
            font-size: 13px;
            border-radius: 8px;
        }

        /* Message */
        .message {
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .message.success {
            background: #dcfce7;
            color: #166534;
            border-left: 6px solid #22c55e;
        }

        .message.error {
            background: #fee2e2;
            color: #991b1b;
            border-left: 6px solid #ef4444;
        }

        /* Table */
        .table-responsive {
            overflow-x: auto;
            border-radius: 12px;
            border: 1px solid #e9edf2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        thead {
            background: #f1f5f9;
        }

        th {
            text-align: left;
            padding: 14px 18px;
            color: #0f172a;
            font-weight: 600;
            border-bottom: 2px solid #dce2ec;
        }

        td {
            padding: 14px 18px;
            border-bottom: 1px solid #eef2f6;
            color: #1e293b;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fafcff;
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .empty-row td {
            text-align: center;
            padding: 40px 20px;
            color: #94a3b8;
            font-style: italic;
        }

        .cancel-link {
            display: inline-block;
            padding: 6px 14px;
            background: #e9edf2;
            border-radius: 8px;
            color: #1e293b;
            text-decoration: none;
            font-weight: 500;
            font-size: 13px;
        }

        .cancel-link:hover {
            background: #d1d9e6;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #94a3b8;
            text-align: center;
            border-top: 1px solid #eef2f6;
            padding-top: 18px;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .container {
                padding: 18px 15px;
            }
            
            .form-group .field {
                flex: 1 1 100%;
            }
            
            .form-group {
                flex-direction: column;
                align-items: stretch;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            th, td {
                padding: 10px 12px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 CRUD <span>PHP + MySQL</span></h1>

        <!-- Message display -->
        <?php if ($message): ?>
            <div class="message <?php echo $messageType; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <!-- Add / Edit Form -->
        <div class="form-wrapper">
            <div class="form-title">
                <?php echo $editUser ? '✏️ Edit User' : '➕ Add New User'; ?>
            </div>
            <form method="POST" action="">
                <?php if ($editUser): ?>
                    <input type="hidden" name="id" value="<?php echo $editUser['id']; ?>">
                <?php endif; ?>
                <div class="form-group">
                    <div class="field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required
                               value="<?php echo $editUser ? htmlspecialchars($editUser['name']) : ''; ?>">
                    </div>
                    <div class="field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required
                               value="<?php echo $editUser ? htmlspecialchars($editUser['email']) : ''; ?>">
                    </div>
                    <div class="field">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="+1 234 567 890"
                               value="<?php echo $editUser ? htmlspecialchars($editUser['phone']) : ''; ?>">
                    </div>
                    <div class="field" style="flex: 0 1 auto; min-width: 120px;">
                        <?php if ($editUser): ?>
                            <button type="submit" name="update" class="btn btn-success">💾 Update</button>
                            <a href="index.php" class="cancel-link">Cancel</a>
                        <?php else: ?>
                            <button type="submit" name="add" class="btn btn-primary">➕ Add User</button>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>

        <!-- Users Table -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result && $result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['phone'] ?? '—'); ?></td>
                                <td>
                                    <div class="actions">
                                        <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">✏️ Edit</a>
                                        <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Delete this user?')">🗑️ Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="empty-row">📭 No users found. Add your first user above.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="footer">
            ⚡ CRUD Operation with PHP, MySQL, HTML &amp; CSS
        </div>
    </div>
</body>
</html>