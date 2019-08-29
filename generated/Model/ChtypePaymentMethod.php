<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethod
{
    /**
     * 
     *
     * @var string
     */
    protected $schema = 'PAYMENT_METHOD_SCHEMA_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $json;
    /**
     * 
     *
     * @return string
     */
    public function getSchema() : string
    {
        return $this->schema;
    }
    /**
     * 
     *
     * @param string $schema
     *
     * @return self
     */
    public function setSchema(string $schema) : self
    {
        $this->schema = $schema;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJson() : string
    {
        return $this->json;
    }
    /**
     * 
     *
     * @param string $json
     *
     * @return self
     */
    public function setJson(string $json) : self
    {
        $this->json = $json;
        return $this;
    }
}