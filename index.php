<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="logo.png" alt="logo" />
            </div>
        </header>

        <?php

            include 'database.php';

        ?>

        <div class="cds-container container">

            <?php foreach ($database as $album) { ?>
                <div class="cd">
                    <img src="<?php echo $album['poster']; ?>" alt="">
                    <h3><?php echo $album['title']; ?></h3>
                    <span class="author"><?php echo $album['author']; ?></span>
                    <span class="year"><?php echo $album['year']; ?></span>
                </div>                
            <?php } ?>
        </div>
    </body>
</html>