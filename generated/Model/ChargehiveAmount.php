<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveAmount
{
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @var int
     */
    protected $units;
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnits() : int
    {
        return $this->units;
    }
    /**
     * 
     *
     * @param int $units
     *
     * @return self
     */
    public function setUnits(int $units) : self
    {
        $this->units = $units;
        return $this;
    }
}