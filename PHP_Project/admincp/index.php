<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" href="css/style.css" >
    </head>
    <body>
        <h3 class="title_admin">Welcome to Admincp</h3>
        <div class="wrapper">

        </div>
        <?php
            include("config/config.php");
            include("modules/dashboard.php");
            include("modules/menu.php");
            include("modules/main.php");
        ?>
    </body>
</html>