<?php
    include 'pure_php.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>
  
    <a href="next_page.php">Next Page</a>
    <h2>
        username: <u id="username"> <?php echo $username; ?></u>
        <br>
        user_id: <u id="user_id"> <?php echo $user_id; ?></u>
        <br>
         email: <u id="email"> <?php echo $email; ?></u>
        <br>
        subject: <u id="subject"> <?php echo $subject; ?></u>
        <br>
        message: <u id="message"> <?php echo $message; ?></u>
    </h2>

    <button type="button" onclick="greetUser()">Click Me!</button>

    
    <script src="external.js"></script>
</body>
</html>