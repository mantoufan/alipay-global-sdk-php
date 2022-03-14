<?php
use Mantoufan\model\CustomerBelongsTo;
use Mantoufan\model\GrantType;
use Mantoufan\model\ScopeType;
use Mantoufan\model\TerminalType;
use Mantoufan\tool\IdTool;
require 'common.php';
$config = include 'data/config.php';
$alipayGlobal = new Mantoufan\AliPayGlobal(array(
    'client_id' => $config['client_id'],
    'endpoint_area' => 'ASIA',
    'merchantPrivateKey' => $config['merchantPrivateKey'],
    'alipayPublicKey' => $config['alipayPublicKey'],
    'is_sandbox' => true,
));
$currentUrl = getCurrentUrl();
$type = $_GET['type'] ?? '';
route($type === 'pay/cashier', function () use (&$alipayGlobal, $currentUrl) {
    try {
        $result = $alipayGlobal->payCashier(array(
            'customer_belongs_to' => CustomerBelongsTo::ALIPAY_CN, // *
            'notify_url' => setQueryParams($currentUrl, array('type' => 'notify')),
            'return_url' => setQueryParams($currentUrl, array('type' => 'return')),
            'amount' => array(
                'currency' => 'USD',
                'value' => '1',
            ),
            'order' => array(
                'id' => null,
                'desc' => 'Order Desc',
                'extend_info' => array(
                    'china_extra_trans_info' => array(
                        'business_type' => 'MEMBERSHIP',
                    ),
                ),
            ),
            'payment_request_id' => null,
            'settlement_strategy' => array(
                'currency' => 'USD',
            ),
            'terminal_type' => TerminalType::WEB, // *
            'os_type' => null,
        ));
        header('Location: ' . $result->normalUrl);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

route($type === 'auth/consult', function () use (&$alipayGlobal, $currentUrl) {
    $auth_state = IdTool::CreateAuthState();
    try {
        $result = $alipayGlobal->authConsult(array(
            'customer_belongs_to' => CustomerBelongsTo::ALIPAY_CN, // *
            'auth_client_id' => null,
            'auth_redirect_url' => setQueryParams($currentUrl, array('type' => 'auth/apply_token/auth_code')), // *
            'scopes' => array(ScopeType::AGREEMENT_PAY), // *
            'auth_state' => $auth_state, // *
            'terminal_type' => TerminalType::WEB, // *
            'os_type' => null,
        ));
        header('Location: ' . $result->normalUrl);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

route($type === 'auth/apply_token/auth_code', function () use (&$alipayGlobal) {
    $auth_code = $_GET['authCode'] ?? '';
    try {
        $result = $alipayGlobal->authApplyToken(array(
            'grant_type' => GrantType::AUTHORIZATION_CODE,
            'customer_belongs_to' => CustomerBelongsTo::ALIPAY_CN,
            'auth_code' => $auth_code,
            'refresh_token' => null,
        ));

        $access_token = $result->accessToken;
        $access_token_expiry_time = $result->accessTokenExpiryTime;
        $refresh_token = $result->refreshToken;
        $refresh_token_expiry_time = $result->refreshTokenExpiryTime;
        session_start();
        $_SESSION['access_token'] = $access_token;

        var_dump($result);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

route($type === 'auth/apply_token/refresh_token', function () use (&$alipayGlobal) {
    $refresh_token = $_GET['refreshToken'] ?? '';
    try {
        $result = $alipayGlobal->authApplyToken(array(
            'grant_type' => GrantType::REFRESH_TOKEN,
            'customer_belongs_to' => CustomerBelongsTo::ALIPAY_CN,
            'auth_code' => null,
            'refresh_token' => $refresh_token,
        ));

        $access_token = $result->accessToken;
        $access_token_expiry_time = $result->accessTokenExpiryTime;
        $refresh_token = $result->refreshToken;
        $refresh_token_expiry_time = $result->refreshTokenExpiryTime;
        session_start();
        $_SESSION['access_token'] = $result->accessToken;

        var_dump($result);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

route($type === 'pay/agreement', function () use (&$alipayGlobal, $currentUrl) {
    try {
        session_start();
        $result = $alipayGlobal->payAgreement(array(
            'notify_url' => setQueryParams($currentUrl, array('type' => 'notify')),
            'return_url' => setQueryParams($currentUrl, array('type' => 'return')),
            'amount' => array(
                'currency' => 'USD',
                'value' => '1',
            ),
            'order' => array(
                'id' => null,
                'desc' => 'Order Desc',
                'extend_info' => array(
                    'china_extra_trans_info' => array(
                        'business_type' => 'MEMBERSHIP',
                    ),
                ),
            ),
            'goods' => array(
                array(
                    'id' => null,
                    'name' => 'Goods Name',
                    'category' => null,
                    'brand' => null,
                    'unit_amount' => null,
                    'quantity' => null,
                    'sku_name' => null,
                ),
            ),
            'merchant' => array(
                'MCC' => null,
                'name' => null,
                'display_name' => null,
                'address' => null,
                'register_date' => null,
                'store' => null,
                'type' => null,
            ),
            'buyer' => array(
                'id' => null,
                'name' => array(
                    'first_name' => 'David', // *
                    'last_name' => 'Chen', // *
                ),
                'phone_no' => null,
                'email' => null,
            ),
            'payment_request_id' => null,
            'payment_method' => array(
                'payment_method_type' => CustomerBelongsTo::ALIPAY_CN, // *
                'payment_method_id' => $_SESSION['access_token'], // *
            ),
            'settlement_strategy' => array(
                'currency' => 'USD',
            ),
            'terminal_type' => TerminalType::WEB, // *
            'os_type' => null,
        ));
        var_dump($result);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

route($type === 'notify', function () use (&$alipayGlobal) {
    try {
        $notify = $alipayGlobal->getNotify();
        // do something

        $alipayGlobal->sendNotifyResponseWithRSA();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

route($type === 'return', function () {
    echo 'Payment or Authorization completed';
});

route($type === 'notify/auth/auth_code', function () use (&$alipayGlobal) {
    try {
        $notify = $alipayGlobal->getNotify();
        // do something
        $rsqBody = $notify->getRsqBody();
        $authorization_notify_type = $reqBody->authorizationNotifyType;
        if ($authorization_notify_type === 'AUTHCODE_CREATED') {
            $_SESSION['auth_code'] = $reqBody->authCode;
        }

        $alipayGlobal->sendNotifyResponseWithRSA();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});
