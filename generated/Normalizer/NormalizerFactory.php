<?php

namespace ChargeHive\Php\Sdk\Generated\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ChargehiveChargeCaptureRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCreateRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCreateResponseNormalizer();
        $normalizers[] = new ChargehiveChargeFraudScanRequestNormalizer();
        $normalizers[] = new ChargehiveChargeFraudScanResponseNormalizer();
        $normalizers[] = new ChargehiveStringTransportNormalizer();
        $normalizers[] = new ChtypeAmountNormalizer();
        $normalizers[] = new ChtypeFraudFactorNormalizer();
        $normalizers[] = new ChtypeFraudResultNormalizer();
        $normalizers[] = new ChtypeFraudScoreNormalizer();
        return $normalizers;
    }
}