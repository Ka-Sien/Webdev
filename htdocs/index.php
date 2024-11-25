<?php
    $showcase = $_GET['showcase'] ?? 'default'; 
?>
<html>
    <head>
        <link rel="stylesheet" href="css/global.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("./layouts/{$showcase}/header.php");
                include("./layouts/{$showcase}/body.php");
                include("./layouts/{$showcase}/footer.php");
            ?>
        </div>
    </body>
</html>