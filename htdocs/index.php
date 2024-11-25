<?php
    $layouts = $_GET['layouts'] ?? 'default'; 
?>
<html>
    <head>
        <link rel="stylesheet" href="css/global.css">
    </head>
    <body>
        <div class="container">
            <?php
                include("./layouts/{$layouts}/header.php");
                include("./layouts/{$layouts}/body.php");
                include("./layouts/{$layouts}/footer.php");
            ?>
        </div>
    </body>
</html>