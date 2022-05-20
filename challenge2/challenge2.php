<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        if(isset($_POST['q']) && strlen($_POST['q']) < 48) {
            echo "<title>Challenge 2 - Search for" . $_POST['q'] . "</title>\n";
        } else {
            echo "<title>Challenge 2</title>\n";
        }
    ?>
    <meta http-equiv="Content-Security-Policy" content="default-src 'none'; object-src 'none'; require-trusted-types-for 'script'">
  </head>
  <body>
    <h1>Challenge 2</h1>

    <form method="POST">
        <input type="text" name="q" placeholder="Search...">
        <input type="submit" value="Go!">
    </form>
    <br>
    <?php 
        if(isset($_POST['q'])) {
            if(strlen($_POST['q']) < 48) {
                echo "<p>You searched for: " . $_POST['q'] . "</p>";
            } else {
                echo "<p><i>Hint: The input length is restricted to 48 characters.</i></p>\n";
            }
        }
    ?>
    <br>
    <p>
        <a href="/index.php">Back to index</a>
    </p>
    <!-- Inspired by https://www.intigriti.com -->
  </body>
</html>
