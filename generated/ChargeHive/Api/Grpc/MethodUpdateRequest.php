<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.MethodUpdateRequest</code>
 */
class MethodUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1;</code>
     */
    private $token = '';
    /**
     * Generated from protobuf field <code>.chargehive.chtype.PaymentMethod payment_method_updates = 3;</code>
     */
    private $payment_method_updates = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *     @type \ChargeHive\Chtype\PaymentMethod $payment_method_updates
     * }
     */
    public function __construct($data = NULL) {
        \ChargeHive\Api\Grpc\Metadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.chargehive.chtype.PaymentMethod payment_method_updates = 3;</code>
     * @return \ChargeHive\Chtype\PaymentMethod
     */
    public function getPaymentMethodUpdates()
    {
        return $this->payment_method_updates;
    }

    /**
     * Generated from protobuf field <code>.chargehive.chtype.PaymentMethod payment_method_updates = 3;</code>
     * @param \ChargeHive\Chtype\PaymentMethod $var
     * @return $this
     */
    public function setPaymentMethodUpdates($var)
    {
        GPBUtil::checkMessage($var, \ChargeHive\Chtype\PaymentMethod::class);
        $this->payment_method_updates = $var;

        return $this;
    }

}

