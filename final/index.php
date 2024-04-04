<!DOCTYPE html>
<html>
<head>
    <title>Recipe Submission</title>
    <!-- Include any CSS file you have for styling -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <form action="recipe.php" method="post">
        <h2>Recipe Submission</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Recipe Name</label>
        <input type="text" name="name" placeholder="Recipe Name" required><br>

        <label>Ingredients</label>
        <textarea name="ingredients" placeholder="Enter ingredients" style="height: 150px; width: 450px;" required></textarea><br>

        <label>Instructions</label>
        <textarea name="instructions" placeholder="Enter instructions" style="height: 150px; width: 450px;" required></textarea><br>

        <button type="submit">Submit Recipe</button>
    </form>
    <?php include 'footer.html'; ?>
</body>
</html>
