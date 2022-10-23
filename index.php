<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            foreach (scandir("./Bilder3") as $file) {
                if ($file === ".." or $file === ".") continue;
                    $SRC = "./Bilder3/".$file."";
                    echo "<img src='".$SRC."'/>\n\n";
                }
        ?>
    </body>
</html>