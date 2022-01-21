<?php
namespace Mantoufan\tool;

class SignatureTool
{
    public static function sign($httpMethod, $path, $clientId, $reqTime, $content, $merchantPrivateKey)
    {
        $signContent = self::genSignContent($httpMethod, $path, $clientId, $reqTime, $content);
        $signValue = self::signWithSHA256RSA($signContent, $merchantPrivateKey);
        return urlencode($signValue);
    }

    public static function verify($httpMethod, $path, $clientId, $rspTime, $rspBody, $signature, $alipayPublicKey)
    {
        $rspContent = self::genSignContent($httpMethod, $path, $clientId, $rspTime, $rspBody);
        return self::verifySignatureWithSHA256RSA($rspContent, $signature, $alipayPublicKey);
    }

    private static function genSignContent($httpMethod, $path, $clientId, $timeString, $content)
    {
        $payload = $httpMethod . " " . $path . "\n" . $clientId . "." . $timeString . "." . $content;
        return $payload;
    }

    private static function signWithSHA256RSA($signContent, $merchantPrivateKey)
    {
        $priKey = "-----BEGIN RSA PRIVATE KEY-----\n" .
        wordwrap($merchantPrivateKey, 64, "\n", true) .
            "\n-----END RSA PRIVATE KEY-----";

        openssl_sign($signContent, $signValue, $priKey, OPENSSL_ALGO_SHA256);
        return base64_encode($signValue);
    }

    private static function verifySignatureWithSHA256RSA($rspContent, $rspSignValue, $alipayPublicKey)
    {
        $pubKey = "-----BEGIN PUBLIC KEY-----\n" .
        wordwrap($alipayPublicKey, 64, "\n", true) .
            "\n-----END PUBLIC KEY-----";
        if (strstr($rspSignValue, "=")
            || strstr($rspSignValue, "+")
            || strstr($rspSignValue, "/")
            || $rspSignValue == base64_encode(base64_decode($rspSignValue))) {
            $originalRspSignValue = base64_decode($rspSignValue);
        } else {
            $originalRspSignValue = base64_decode(urldecode($rspSignValue));
        }

        $verifyResult = openssl_verify($rspContent, $originalRspSignValue, $pubKey, OPENSSL_ALGO_SHA256);
        return $verifyResult;
    }
}
