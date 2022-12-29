<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $h1; ?></h1>

    <!-- <?php echo "<pre>";var_dump($data); ?> -->
    
    <ul>
        <?php foreach($data as $k=>$d): ?>
            <li><?php print_r($d->user_name); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>