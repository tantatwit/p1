<?php
// Include the database connection file
include "db_conn.php";

// Initialize an empty array to store recipes
$recipes = array();

// Query to fetch recipes from the database
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    echo json_encode(array("error" => "Failed to fetch recipes: " . $conn->error));
    exit(); // Terminate script execution
}

// Check if there are any recipes found
if ($result->num_rows > 0) {
    // Loop through each row and add it to the $recipes array
    while ($row = $result->fetch_assoc()) {
        // Add each recipe as an associative array to the $recipes array
        $recipes[] = array(
            'name' => $row['name'],
            'ingredients' => $row['ingredients'],
            'instructions' => $row['instructions']
        );
    }
}

// Close the database connection
$conn->close();

// Output the $recipes array as JSON
header('Content-Type: application/json');
echo json_encode($recipes);
?>
