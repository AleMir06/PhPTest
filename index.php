<!DOCTYPE html>
<html>
    <head>
        <link href="Weitere/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div onmousedown="WhichButton(event)" class="body0">
            <?php
                foreach(scandir("./Videos") as $type){
                    if($type === ".." or $type === ".") continue;
                    $Liste [] = $type;
                    echo "<div class='type0'>";
                    echo "<h3>".$type."</h3>\n\n";
                    foreach(scandir("./Videos/".$type) as $dir) {
                        if($dir === ".." or $dir === ".") continue;
                        echo "<p>".$dir."</p>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
        <script>
            function WhichButton(event) {
                document.addEventListener('contextmenu', event => event.preventDefault());
            }
        </script>
    </body>
</html>