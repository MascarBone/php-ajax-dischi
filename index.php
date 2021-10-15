


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP AJAX DISCHI</title>
</head>
<body>

<?php include './database.php'; ?>
    
    
<div class="wrapper">
    <?php foreach($db as $album) { ?>
    
    <div class="album">
        <div class="album-img">
            <img src="<?php echo $album['poster']; ?>" alt="cover album">
        </div>
        <div class="album-text">
            <h2><?php echo $album['title']; ?></h2>
            <p><?php echo $album['author']; ?></p>
            <p><?php echo $album['genre']; ?></p>
            <p><?php echo $album['year']; ?></p>
        </div>
    </div>

    <?php } ?>
    
</div>

</body>
</html>
