<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recaptcha
{
    private $url         = 'https://www.google.com/recaptcha/api/siteverify';
    private $secret_code = '6Lc-dbsdAAAAAFSVS4lB0Pe4onch7y37-glRMNjN';

    public function verifyResponse($captcha, $ip)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=" . $this->secret_code . "&response=" . $captcha . '&remoteip=' . $ip);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($ch));
        curl_close($ch);
        if ($data && isset($data->success) /*&& isset($data->score) && $data->score >= 0.5*/) {
            return $data->success;
        }
        return false;
    }
}