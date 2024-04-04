<?php
// Include the database connection file
include "db_conn.php";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    // Insert data into the database
    $sql = "INSERT INTO recipes (name, ingredients, instructions) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $ingredients, $instructions);

    // Execute the insert query
    if ($stmt->execute()) {
        // Data inserted successfully
        header("Location: index.php?success=Recipe added successfully");
        exit();
    } else {
        // Error occurred
        header("Location: index.php?error=Failed to add recipe");
        exit();
    }
}
?>
