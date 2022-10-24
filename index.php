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

            foreach(scandir("./Videos")as $dir) {
              if($dir === ".." or $dir === ".") continue;
                echo "<h1>".$dir."<h1>\n";
                foreach(scandir("./Videos/".$dir.) as $dir2) {
                  echo "<div class='dropdown'";
                  echo "\t<button class='dropbtn'>Dropdown<\button>";
                  echo "\t<div class='dropdown-content'>";
                  foreach(scandir("./Videos/".$dir."/".$dir2) as $file){
                    echo "<a href='#'>".$file."</a>";
                  }
                }
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