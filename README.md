SG_CAPTCHA
==========

The SG_CAPTCHA PHP Library provides a simple way to place a CAPTCHA on your PHP website, helping you stop bots on you site.

Quick Start
========================

Client Side (How to make the CAPTCHA image show up)
===================================================

require_once('libs/SG_Captcha.php');

$captchaHtml = getCaptchaHtml();

echo $captchaHtml;

For example:
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

Server Side (How to test if the user entered the right answer)
==============================================================

<?php
// ...
// Some function where you check and send form data

require_once('MY_PATCH_TO_LIBS/SG_Captcha.php');

$key = $_POST['key'];
$code = $_POST['code'];

require_once('libs/SG_Captcha.php');

if (checkCaptcha($key, $code)) {
  // Congratulation! Capthca is correct!;
} else {
  // Fuck! Capthca is not correct!;
}
