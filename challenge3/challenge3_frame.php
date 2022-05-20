<!DOCTYPE html>
<html lang="en">
  <body>
    <script>
        window.addEventListener("message", (event) => {
            if (!event.origin.startsWith(window.origin)) return;
            currTime.innerHTML = event.data;
        }, false);
    </script>
    <p id="currTime"></p>
  </body>
</html>