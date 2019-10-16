<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.ChargeAuthorizeRequest</code>
 */
class ChargeAuthorizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string charge_id = 1;</code>
     */
    private $charge_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $charge_id
     * }
     */
    public function __construct($data = NULL) {
        \ChargeHive\Api\Grpc\Metadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string charge_id = 1;</code>
     * @return string
     */
    public function getChargeId()
    {
        return $this->charge_id;
    }

    /**
     * Generated from protobuf field <code>string charge_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChargeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->charge_id = $var;

        return $this;
    }

}

