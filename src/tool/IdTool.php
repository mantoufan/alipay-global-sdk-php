<?php
namespace Mantoufan\tool;

class IdTool
{
    public static function CreateId()
    {
        list($ms) = explode(' ', microtime());
        return date('YmdHis') . ($ms * 1000000) . rand(00, 99);
    }

    public static function CreateReferenceOrderId()
    {
        return 'ORDER-' . self::CreateId();
    }

    public static function CreatePaymentRequestId()
    {
        return 'PAYMENT-' . self::CreateId();
    }

    public static function CreatePaymentMethodId()
    {
        return 'PAYMENTMETHOD-' . self::CreateId();
    }

    public static function CreateBuyerId()
    {
        return 'BUYER-' . self::CreateId();
    }

    public static function CreateReferenceGoodsId()
    {
        return 'GOODS-' . self::CreateId();
    }

    public static function CreateReferenceMerchantId()
    {
        return 'MERCHANT-' . self::CreateId();
    }

    public static function CreateAuthState()
    {
        return 'STATE-' . self::CreateId();
    }
}
