<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCaptureRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @var ChargehiveAmount
     */
    protected $amount;
    /**
     * 
     *
     * @return string
     */
    public function getChargeId() : string
    {
        return $this->chargeId;
    }
    /**
     * 
     *
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId(string $chargeId) : self
    {
        $this->chargeId = $chargeId;
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
}