<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 5</title>
  </head>
  <body>
    <h1>Challenge 5</h1>

    <form method="POST">
        <input type="text" name="q" placeholder="Search...">
        <input type="submit" value="Go!">
    </form>
    <br>
    <?php 
        if(isset($_REQUEST['q']) && $_REQUEST['q'] != "") {
            echo "<script>\n";
            echo "\t\teval(" . str_replace(array("\"", "'", "(", ")", "`", ".", "/", "\\", "*"), "", $_REQUEST['q']) . ");\n";
            echo "\t</script>\n";
        }
    ?>
    <br>
    <p>
        <a href="/index.php">Back to index</a>
    </p>
  </body>
</html>