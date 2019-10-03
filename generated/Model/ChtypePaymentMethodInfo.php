<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethodInfo
{
    /**
     * 
     *
     * @var string
     */
    protected $tokenId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $paymentScheme;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $validFrom;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiry;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'PAYMENT_METHOD_TYPE_INVALID';
    /**
     * 
     *
     * @var string[]
     */
    protected $info;
    /**
     * 
     *
     * @return string
     */
    public function getTokenId() : string
    {
        return $this->tokenId;
    }
    /**
     * 
     *
     * @param string $tokenId
     *
     * @return self
     */
    public function setTokenId(string $tokenId) : self
    {
        $this->tokenId = $tokenId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentScheme() : string
    {
        return $this->paymentScheme;
    }
    /**
     * 
     *
     * @param string $paymentScheme
     *
     * @return self
     */
    public function setPaymentScheme(string $paymentScheme) : self
    {
        $this->paymentScheme = $paymentScheme;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getValidFrom() : \DateTime
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param \DateTime $validFrom
     *
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom) : self
    {
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiry() : \DateTime
    {
        return $this->expiry;
    }
    /**
     * 
     *
     * @param \DateTime $expiry
     *
     * @return self
     */
    public function setExpiry(\DateTime $expiry) : self
    {
        $this->expiry = $expiry;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getInfo() : \ArrayObject
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param string[] $info
     *
     * @return self
     */
    public function setInfo(\ArrayObject $info) : self
    {
        $this->info = $info;
        return $this;
    }
}