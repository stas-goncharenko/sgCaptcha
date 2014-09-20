<?php

define("CAPTCHA_API_SERVER", "http://goncharenko.biz/api-captcha");

function getCaptchaHtml () {

    $curl = curl_init(CAPTCHA_API_SERVER);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($curl);

    return $html;
}

function checkCaptcha ($key, $code) {

    if (empty($key)  || empty($code)) {
        return false;
    }
    
    $params = array(
        'key' => $key,
        'code' => $code
    );

    $vars = http_build_query($params);

    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $vars,
        )
    );
    $context  = stream_context_create($options);  // создаём контекст потока
    $response = file_get_contents(CAPTCHA_API_SERVER, false, $context); //отправляем запрос

    $response = json_decode($response);

    if (!isset($response->status) || (isset($response->status) && $response->status != 'success')) {
        return false;
    }

    return true;
}
