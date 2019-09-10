<?php

namespace ChargeHive\Php\Sdk\Generated\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ChargehiveChargeAuthorizeRequestNormalizer();
        $normalizers[] = new ChargehiveChargeAuthorizeResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCreateRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCreateResponseNormalizer();
        $normalizers[] = new ChargehiveChargeFraudScanRequestNormalizer();
        $normalizers[] = new ChargehiveChargeFraudScanResponseNormalizer();
        $normalizers[] = new ChargehiveChargeModifyRequestNormalizer();
        $normalizers[] = new ChargehiveChargeModifyResponseNormalizer();
        $normalizers[] = new ChargehiveChargeRefundRequestNormalizer();
        $normalizers[] = new ChargehiveChargeRefundResponseNormalizer();
        $normalizers[] = new ChargehiveChargeRefundTransactionNormalizer();
        $normalizers[] = new ChargehiveMethodUpdateRequestNormalizer();
        $normalizers[] = new ChargehiveMethodUpdateResponseNormalizer();
        $normalizers[] = new ChargehiveStringTransportNormalizer();
        $normalizers[] = new ChargehiveSupportedMethodUpdateTypesNormalizer();
        $normalizers[] = new ChtypeAmountNormalizer();
        $normalizers[] = new ChtypeAttemptDetailNormalizer();
        $normalizers[] = new ChtypeFraudFactorNormalizer();
        $normalizers[] = new ChtypeFraudResultNormalizer();
        $normalizers[] = new ChtypeFraudScoreNormalizer();
        $normalizers[] = new ChtypePaymentMethodNormalizer();
        $normalizers[] = new ChtypePaymentMethodInfoNormalizer();
        $normalizers[] = new ChtypePaymentMethodSchemaCardNormalizer();
        $normalizers[] = new ChtypeReasonNormalizer();
        $normalizers[] = new ChtypeResponseDetailNormalizer();
        $normalizers[] = new ChtypeThreeDSResultNormalizer();
        $normalizers[] = new ChtypeTransactionNormalizer();
        $normalizers[] = new ChtypeTransactionDetailNormalizer();
        $normalizers[] = new ChtypeVerificationResultNormalizer();
        $normalizers[] = new ChtypeVerifyRequestDataNormalizer();
        return $normalizers;
    }
}