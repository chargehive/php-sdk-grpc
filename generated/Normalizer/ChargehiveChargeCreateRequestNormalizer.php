<?php

namespace ChargeHive\Php\Sdk\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChargehiveChargeCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeCreateRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeCreateRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCreateRequest();
        if (property_exists($data, 'merchant_reference')) {
            $object->setMerchantReference($data->{'merchant_reference'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($this->denormalizer->denormalize($data->{'amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveAmount', 'json', $context));
        }
        if (property_exists($data, 'PaymentMethodIds')) {
            $values = array();
            foreach ($data->{'PaymentMethodIds'} as $value) {
                $values[] = $value;
            }
            $object->setPaymentMethodIds($values);
        }
        if (property_exists($data, 'expiry_time')) {
            $object->setExpiryTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expiry_time'}));
        }
        if (property_exists($data, 'contract_type')) {
            $object->setContractType($data->{'contract_type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMerchantReference()) {
            $data->{'merchant_reference'} = $object->getMerchantReference();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getPaymentMethodIds()) {
            $values = array();
            foreach ($object->getPaymentMethodIds() as $value) {
                $values[] = $value;
            }
            $data->{'PaymentMethodIds'} = $values;
        }
        if (null !== $object->getExpiryTime()) {
            $data->{'expiry_time'} = $object->getExpiryTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getContractType()) {
            $data->{'contract_type'} = $object->getContractType();
        }
        return $data;
    }
}