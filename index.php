<?php
require 'vendor/autoload.php';
use Mantoufan\DefaultAlipayClient;
use Mantoufan\model\Amount;
use Mantoufan\model\CustomerBelongsTo;
use Mantoufan\model\Env;
use Mantoufan\model\Order;
use Mantoufan\model\PaymentMethod;
use Mantoufan\model\ProductCodeType;
use Mantoufan\model\TerminalType;
use Mantoufan\request\pay\AlipayPayRequest;

$clientId = 'SANDBOX_5Y3A2N2YEB3002022';
$merchantPrivateKey = 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCfsLCiwlKAiYdtLNoUTxx57SUFFrp4+qEnIn0gCl+bBj9/JiOiG24TSoFlvFAjFiTkL3udOXg9OXwtz0svXLtjrkhAQF7mmfl1Myj/5DrwZJSATO/503ILXBJuyAr64WG1xFl6KPeFfvCeZ6Yo75fIL/vbi7x/8RD7KwrSD4HCebpc+VNSb18ha7wPFDNJ2wgaNVHnPtxwYjiUW2VqBC5GkS1roAH2ernywC2oxXwaOqhxawbBBSMj6S3H73JENY7Sf0fhweKffp0qFqhc3s7lNppo1vTVO+UhVobIkFhpDp/bBddHlc7dCCzqLy65S/0cXyvYjezdkkiKv3pW4EnTAgMBAAECggEAOsRVXLBSmEcEdaMJ5mtuuVgSRZslqJvjbnl8vqvSn0RfXbV1a5TYn3TNxdjVTPQ7Q1ZOEYAyxaVAE8OzkYx40agzoqGNyyNi8ESRlAozvn/lPooRzkiIMbICfo5TrBwBT1kg7Jni7VfXyROvzGTP4LX348W66wKWEzi11LQsNprr9Yty9VHX9xHAcrMvveLYbcjnJbka/XPmoKMpiQzk+q8/7d/IeSkt32TT6cmQGmLcucM68fM859/N/7fUnG8jJ3OvTStFq41RSQxIvknzzoBqFffRbond/XE3zZTR0LAYf4eEGUyd6Ckxl2506ew9awXPsVpZfcUO4+X60OV9kQKBgQDfLn5h9dc1G4q4B4Ge0mkC/wtJejE4nsw5/HNKE0P15RnsmFcruNGebHm3cZIz3TQGE/Y4xMGrMGEowCMsL6MEv0hKsfZxutFxTceykZbyPCqIFNklJBqLhFa+kjtOTShpSyR4ukXupPyStemqXI8bls9BCyHg8f4RD8bhZfMmdwKBgQC3LBvfzBSSzKYRa5YJG7rlRvd0pQKX4dENeBugrPpzcbQcMYXdz0Cg/CGH3yB+50sLGiPEJNSEVlLHXYsjyvP8EXyBf2sdxe0q8aB7RpI0aoEZwREdYthm2KPDNwawl3lWpJmDZZXFH12XWlWluusf5nWV8BwW34PdCOt91/qihQKBgEqzlTnUv6PXBCd02739T4jhNTXy4GbDQDhod25j5Gt5s6Otmf/YbNFKHbN5ICab873VEKUPtoNGPj8VkLBJgZclL11RE9wdW91A24a5lHygBtxlngkAfKIWObKv34nl6ZDUxfBi6OVn8+JnYT7UnFHvuI9c2oogdZngXgEzzp8hAoGBAKpCeMJkWvc8/FwS6cobmXSGq3sj6i4tO3lOnDeUsdPe67CNI8ZSX9uDoNM/xl/PNATkzjwCk/tSle00eSHTA0jZJCbmvjVVhac2I5qStVG9cbTzrann+AhY9Jd/LVu14JZ1ty/YnAc3qXIHCLdc8DKdr8yn/CQSrOom4WX+/LxVAoGAXtOeeYKUvp5KzwFbY+zHm2wpZ2fw+xc7Up/RUeYryFRxXhWw/G3EJHTK7dMadnAYeKaOuE4n9XXmFyuP29QLJ+HCQfuSHOLGbCx3a+j7UsrRbWIcx4vg+YnW1EDd2/Ui8cPCHukRhSm7+jJCjfv2GmatdI73eZ+CQcMS27NTAJY=';
$alipayPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAihzSL26iayp+mj1ipXa7zdQoNDPhTBaxwJ08KZn3ja+G1eFJP445AmbZwGtASGJtbnctuav+ztElJvEU+NvNW3db+EvJXsb9QIj1Elgnt5WCvMDIhUQyDcp/b7WMRZlAyAWbO52sgA9ioAwaNS/jBPtb+8lx0s0bloAVleG7st8Wy7VTXrhOgpMZqsbQfE6dM4PiX7oeU+8NWGWR+pihLYTUsjaY2l+McusfQkBqKvp1bILljbVxBtT66dldCoEPxoCUN4kihwovXhkUzDbVhKFQ8fwrwOTWi2UgNnnMNrtH+cPcJCMz3WMcUaFy0cbQlyQmUbapI3moyPx20m+7jwIDAQAB';
$path = '/ams/sandbox/api/v1/payments/pay';
$paymentNotifyUrl = 'https://www.alipay.com/notify';
$paymentRedirectUrl = 'https://www.alipay.com';
$paymentRequestId = 'demo-test-id';

$alipayClient = new DefaultAlipayClient('https://open-sea.alipay.com', $merchantPrivateKey, $alipayPublicKey);
$alipayPayRequest = new AlipayPayRequest();

$alipayPayRequest->setProductCode(ProductCodeType::CASHIER_PAYMENT);
$alipayPayRequest->setPaymentNotifyUrl($paymentNotifyUrl);
$alipayPayRequest->setPaymentRedirectUrl($paymentRedirectUrl);
$alipayPayRequest->setPaymentRequestId($paymentRequestId);

$paymentMethod = new PaymentMethod();
$paymentMethod->setPaymentMethodType(CustomerBelongsTo::ALIPAY_CN);
$alipayPayRequest->setPaymentMethod($paymentMethod);

$amount = new Amount();
$amount->setCurrency('USD');
$amount->setValue('100');

$order = new Order();
$order->setOrderDescription('test order desc');
$order->setReferenceOrderId('102775745075669');
$order->setOrderAmount($amount);
$order->setExtendInfo(json_encode(array('chinaExtraTransInfo' => array('businessType' => 'HOTEL'))));

$env = new Env();
$env->setTerminalType(TerminalType::WEB);
$order->setEnv($env);

$alipayPayRequest->setPaymentAmount($amount);
$alipayPayRequest->setOrder($order);
$alipayPayRequest->setPath($path);
$alipayPayRequest->setClientId($clientId);
$alipayPayRequest->setSettlementStrategy(array('settlementCurrency' => 'USD'));

try {
    $alipayResponse = $alipayClient->execute($alipayPayRequest);
    var_dump($alipayResponse);
} catch (Exception $e) {
    echo $e - getMessage();
}
