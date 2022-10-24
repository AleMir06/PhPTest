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

      <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>

    </body>
</html>