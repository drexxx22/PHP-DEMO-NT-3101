<?php
    $new_username = "My new username";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO NT 3101</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php echo $new_username; ?>
    <br>
    <input type="text" id="newmail" name="email" placeholder="Enter your new email: ">
    <button type="button" onclick="updateEmail()">Update Email</button>

    <br>
    <a href="index.php">Back to Home</a>
    
</body>
</html>