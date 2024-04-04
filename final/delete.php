<?php
// Include database connection
include "db_conn.php";

// Check if recipe ID is provided
if (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    
    // Construct DELETE query
    $sql = "DELETE FROM recipes WHERE id = $recipe_id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to recipe listing page
        header("Location: recipes.php");
        exit();
    } else {
        echo "Error deleting recipe: " . $conn->error;
    }
} else {
    echo "Recipe ID not provided.";
}
?>
