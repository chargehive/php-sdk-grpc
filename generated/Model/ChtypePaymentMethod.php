<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethod implements \JsonSerializable
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
    public function getSchema()
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
    public function setSchema(string $schema)
    {
        $this->schema = $schema;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJson()
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
    public function setJson(string $json)
    {
        $this->json = $json;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['schema' => $this->schema, 'json' => $this->json];
    }
}