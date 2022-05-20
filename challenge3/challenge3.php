<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 3</title>
  </head>
  <body>
    <h1>Challenge 3</h1>
    <p>
        Current time:
    </p><br>
    <iframe src="challenge3_frame.php" width="100%" height="100px" frameborder="0" id="eClock"></iframe>
    <script>
        function loop() {
            setTimeout(function() {
                document.getElementById("eClock").contentWindow.postMessage(Date.now(), "*");
                loop();
            }, 1000);
        }
        loop();
    </script>
    <br>
    <p>
        <a href="/index.php">Back to index</a>
    </p>
    <!-- Credit: https://twitter.com/iphoneintosh -->
  </body>
</html>
