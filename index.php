<?php 
    // include('includes/data.php');
    include_once ('includes/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <h1><?php echo greeting($name) ?> today is <?php echo DAY ?></h1>
    <a href="contact.php">Me contacter</a>

    <h2>Liste des users</h2>
    <?php
        foreach($users as $user) {
            ?>
            <div>
                <h3><?php echo $user['name']; ?></h3>
                <p><?php echo $user['prenom']; ?></p>
                <p><?php echo $user['ville']; ?></p>
                <p><?php echo $user['age']; ?> ans</p>
            </div>
            <?php
        }
    ?>
    <?php include('includes/footer.php') ?>
</body>
</html>