<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 1</title>
  </head>
  <body>
    <h1>Challenge 1</h1>

    <form method="POST">
        <input type="text" name="q" placeholder="Search...">
        <input type="submit" value="Go!">
    </form>
    <br>
    <?php 
        if(isset($_POST['q'])) {
            if(strlen($_POST['q']) >= 42) {
                echo "<p><i>Hint: The input length is restricted to 42 characters.</i></p>";
            } else {
                echo "<p>You searched for: " . htmlentities($_POST['q']) . "</p>\n";
                echo "<script>console.log(\"" . str_replace(array("\"", "'"), "", $_POST['q']) . "\")</script>\n";
            }
        }
    ?>
    <br>
    <p>
        <a href="/index.php">Back to index</a>
    </p>
    <!-- Inspired by https://twitter.com/iphoneintosh -->
  </body>
</html>
