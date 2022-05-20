<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 4</title>
  </head>
  <body>
    <h1>Challenge 4</h1>

    <form method="POST">
        <input type="text" name="q" placeholder="Search...">
        <input type="submit" value="Go!">
    </form>
    <br>
    <?php 
        if(isset($_POST['q'])) {
            echo "<p>You searched for: " . htmlentities($_POST['q']) . "</p>";
            echo "<script>console.log(`" . str_replace(array("`"), "", htmlentities($_POST['q'], ENT_QUOTES, "UTF-8")) . "`)</script>";
        }
    ?>
    <br>
    <p>
        <a href="/index.php">Back to index</a>
    </p>
  </body>
</html>
