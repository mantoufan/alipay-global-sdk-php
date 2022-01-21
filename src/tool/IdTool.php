<?php
namespace Mantoufan\tool;

class IdTool
{
    public function CreateId()
    {
        list($ms) = explode(' ', microtime());
        return date('YmdHis') . ($ms * 1000000) . rand(00, 99);
    }

    public function CreateReferenceOrderId()
    {
        return 'ORDER-' . self::CreateId();
    }

    public function CreatePaymentRequestId()
    {
        return 'PAYMENT-' . self::CreateId();
    }

    public function CreatePaymentMethodId()
    {
        return 'PAYMENTMETHOD-' . self::CreateId();
    }

    public function CreateBuyerId()
    {
        return 'BUYER-' . self::CreateId();
    }

    public function CreateReferenceGoodsId()
    {
        return 'GOODS-' . self::CreateId();
    }

    public function CreateReferenceMerchantId()
    {
        return 'MERCHANT-' . self::CreateId();
    }

    public function CreateAuthState()
    {
        return 'STATE-' . self::CreateId();
    }
}
