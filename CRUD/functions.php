<?php
require_once 'config.php';

// Add User
function addUser($name, $email, $phone) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);
    
    if ($stmt->execute()) {
        $result = ['success' => true, 'message' => 'User added successfully!'];
    } else {
        $result = ['success' => false, 'message' => 'Error: ' . $stmt->error];
    }
    
    $stmt->close();
    $conn->close();
    return $result;
}

// Get All Users
function getUsers() {
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
    $users = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    
    $conn->close();
    return $users;
}

// Get Single User
function getUserById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $user = null;
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    }
    
    $stmt->close();
    $conn->close();
    return $user;
}

// Update User
function updateUser($id, $name, $email, $phone) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $phone, $id);
    
    if ($stmt->execute()) {
        $result = ['success' => true, 'message' => 'User updated successfully!'];
    } else {
        $result = ['success' => false, 'message' => 'Error: ' . $stmt->error];
    }
    
    $stmt->close();
    $conn->close();
    return $result;
}

// Delete User
function deleteUser($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $result = ['success' => true, 'message' => 'User deleted successfully!'];
    } else {
        $result = ['success' => false, 'message' => 'Error: ' . $stmt->error];
    }
    
    $stmt->close();
    $conn->close();
    return $result;
}
?>