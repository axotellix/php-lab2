<?php

    require('calcs.php');
    require('layouts.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "styles/css/Normalize.css">
    <link rel="stylesheet" href="styles/css/styles.css">

    <link rel = "shortcut icon" href = "imgs/favicon.ico">

    <title>EcoGuard.</title>
</head>
<body>
<div id = 'app'>


    <!-- [ NAVBAR ] -->
    <nav>
        
        <button class = 'menu'>
            <svg class="icon">
                <use xlink:href="imgs/icons.svg#ico-menu"></use>
            </svg>
        </button>

        <h1 class="logo">EcoGuard.</h1>

    </nav>


    <!-- [ MAIN ] -->
    <section class="how-it-works bg-light">
        
        <form action="index.php" class = 'form-wide form-light centered'>
            <input type="text" name = 'layout-type'  placeholder="Layout type ..."  autocomplete="off">

            <input type="submit" value = 'APPLY' enabled = 'true'>
        </form>

    </section>

    <section class="layout f-size-sm">
        <h1 class="heading">
            Layout type: <?= $layout_type; ?>
        </h1>
        <? tabF(); ?>
    </section>


    <footer>
        <p>&copy; EcoGuard | All rights reserved.</p>
    </footer>

</div>
</body>
</html>