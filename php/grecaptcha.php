<?php

    function verify_grecaptcha_code($grecaptcha_code, $secret) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret' => $secret,
            'response' => $grecaptcha_code);

// use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $grecaptcha_raw_result = file_get_contents($url, false, $context);
        $grecaptcha_result = json_decode($grecaptcha_raw_result, true);

        return $grecaptcha_result;
    }