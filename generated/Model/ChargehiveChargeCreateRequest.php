<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCreateRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $merchantReference;
    /**
     * 
     *
     * @var ChargehiveAmount
     */
    protected $amount;
    /**
     * 
     *
     * @var string[]
     */
    protected $paymentMethodIds;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiryTime;
    /**
     * 
     *
     * @var string
     */
    protected $contractType = 'CONTRACT_TYPE_INVALID';
    /**
     * 
     *
     * @return string
     */
    public function getMerchantReference() : string
    {
        return $this->merchantReference;
    }
    /**
     * 
     *
     * @param string $merchantReference
     *
     * @return self
     */
    public function setMerchantReference(string $merchantReference) : self
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehiveAmount
     */
    public function getAmount() : ChargehiveAmount
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param ChargehiveAmount $amount
     *
     * @return self
     */
    public function setAmount(ChargehiveAmount $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPaymentMethodIds() : array
    {
        return $this->paymentMethodIds;
    }
    /**
     * 
     *
     * @param string[] $paymentMethodIds
     *
     * @return self
     */
    public function setPaymentMethodIds(array $paymentMethodIds) : self
    {
        $this->paymentMethodIds = $paymentMethodIds;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiryTime() : \DateTime
    {
        return $this->expiryTime;
    }
    /**
     * 
     *
     * @param \DateTime $expiryTime
     *
     * @return self
     */
    public function setExpiryTime(\DateTime $expiryTime) : self
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractType() : string
    {
        return $this->contractType;
    }
    /**
     * 
     *
     * @param string $contractType
     *
     * @return self
     */
    public function setContractType(string $contractType) : self
    {
        $this->contractType = $contractType;
        return $this;
    }
}