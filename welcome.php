<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
</head>
<body>
    <h1>
        Welcome 
        <?php echo user('name'); ?>
    </h1>

    <a href="logout.php">Logout</a>
    
</body>
</html>