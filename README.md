SG_CAPTCHA
==========

The SG_CAPTCHA PHP Library provides a simple way to place a CAPTCHA on your PHP website, helping you stop bots.

Quick Start
==========


Client Side (How to make the CAPTCHA image show up)
---------------------------------------------------

```bash

require_once('MY_PATCH_TO_LIBS/SG_Captcha.php');

$captchaHtml = getCaptchaHtml();

echo $captchaHtml;
```

For example:

```bash
<html>
  <body>
    <form method="POST" action="MY_CHECKER_FILE.php">
        <?php 
          require_once('MY_PATCH_TO_LIBS/SG_Captcha.php');
          $captchaHtml = getCaptchaHtml();
          echo $captchaHtml;
        ;?>
        <input type="submit"/>
    </form>
  </body>
</html>
```


Server Side (How to test if the user entered the right answer)
--------------------------------------------------------------

```bash
<?php
// ...
// Some function where you check and send data from form

require_once('MY_PATCH_TO_LIBS/SG_Captcha.php');

$key = $_POST['key'];
$code = $_POST['code'];

if (checkCaptcha($key, $code)) {
  // Congratulation! Capthca is correct!;
} else {
  // Ops! Capthca is not correct!;
}
```
