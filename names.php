<?php
    $names = ['James', 'Mickael', 'John']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Names</h1>
    <ul>
        <?php foreach($names as $names) { ?>
        
            <li><?= $names ?></li>
        }
    </ul>
    
</body>
</html>