<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
</head>
<body>

<?php
include __DIR__ . '/dischi/dischi.php';
?>
    <main>
        <div>
            <ul>
                <?php 
                    foreach ($dischi as $disco) {
                    ?>
                    <li>
                        <h3><?=$disco['title']?></h3>
                        <p><?=$disco['author']?></p>
                        <p><?=$disco['genre']?></p>
                    </li>
                    <?php    
                    }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>