<?php

namespace ChargeHive\Php\Sdk\Generated\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ChargehiveAmountNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCreateRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCreateResponseNormalizer();
        $normalizers[] = new ChargehiveStringTransportNormalizer();
        return $normalizers;
    }
}