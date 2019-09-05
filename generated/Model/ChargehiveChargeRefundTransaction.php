<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundTransaction implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $sourceTransactionId;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $amount;
    /**
     * 
     *
     * @return string
     */
    public function getSourceTransactionId()
    {
        return $this->sourceTransactionId;
    }
    /**
     * 
     *
     * @param string $sourceTransactionId
     *
     * @return self
     */
    public function setSourceTransactionId(string $sourceTransactionId)
    {
        $this->sourceTransactionId = $sourceTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $amount
     *
     * @return self
     */
    public function setAmount(ChtypeAmount $amount)
    {
        $this->amount = $amount;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['sourceTransactionId' => $this->sourceTransactionId, 'amount' => $this->amount];
    }
}