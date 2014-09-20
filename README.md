SG_CAPTCHA
==========

The SG_Captcha PHP Library provides a simple way to place a CAPTCHA on your PHP website, helping you stop bots.
Why SG_CAPTCHA:
- very light library (only 1.1 kb)
- very fast generate captcha images ~ 0.135 s
- use of third party api
- good protected code
- very usy to integrate

Captcha will be looking like this:

![Bower version](https://github.com/stas-goncharenko/SG_CAPTCHA/blob/master/img/captcha.png)


## Quick start

Four quick start options are available:

- [Download the latest release](https://github.com/stas-goncharenko/SG_CAPTCHA/archive/master.zip) or clone the repo: `https://github.com/stas-goncharenko/SG_CAPTCHA.git`.
- add captcha on clien side
- add captcha on server side where you will check client captcha code


Client Side (How to show CAPTCHA on your site)
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


Server Side (How to check if the user entered the right answer)
--------------------------------------------------------------

For example:

```bash
<?php
// ...
// code where you check and send data from form

require_once('MY_PATCH_TO_LIBS/SG_Captcha.php');

$key = $_POST['key'];
$code = $_POST['code'];

if (checkCaptcha($key, $code)) {
  // Congratulation! Capthca is correct!;
} else {
  // Ops! Capthca is not correct!;
}
```

## P.S.
Good luck with the integration 
