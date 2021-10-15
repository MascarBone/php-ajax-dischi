


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>PHP AJAX DISCHI</title>
</head>
<body>

<?php include './database.php'; ?>

<pre>
<?php print_r($db[0]); ?>
</pre>
    
    
<div class="wrapper">
    <div class="album">
        <div class="album-img">
            <img style="width:200px" src="<?php echo $db[0]['poster']; ?>" alt="cover album">
        </div>
        <div class="album-text">
            <h2><?php echo $db[0]['title']; ?></h2>
            <p><?php echo $db[0]['author']; ?></p>
            <p><?php echo $db[0]['genre']; ?></p>
            <p><?php echo $db[0]['year']; ?></p>
        </div>
    </div>
</div>

</body>
</html>
