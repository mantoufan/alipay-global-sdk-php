<?php
namespace Mantoufan\response;

use Mantoufan\model\Response;

class NotifyResponse
{
    public function getResponse()
    {
        $response = new Response();
        $response->setHttpMethod($_SERVER['REQUEST_METHOD']);
        $response->setClientId($_SERVER['HTTP_CLIENT_ID']);
        $response->setRspTime($_SERVER['HTTP_REQUEST_TIME']);
        $response->setRspBody(file_get_contents('php://input'));
        $response->setSignature($_SERVER['HTTP_SIGNATURE']);
        return $response;
    }
}
