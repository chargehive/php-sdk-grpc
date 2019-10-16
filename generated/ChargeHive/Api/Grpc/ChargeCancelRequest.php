<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.ChargeCancelRequest</code>
 */
class ChargeCancelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string charge_id = 1;</code>
     */
    private $charge_id = '';
    /**
     * Generated from protobuf field <code>.chargehive.chtype.Reason reason = 2;</code>
     */
    private $reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $charge_id
     *     @type \ChargeHive\Chtype\Reason $reason
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

    /**
     * Generated from protobuf field <code>.chargehive.chtype.Reason reason = 2;</code>
     * @return \ChargeHive\Chtype\Reason
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>.chargehive.chtype.Reason reason = 2;</code>
     * @param \ChargeHive\Chtype\Reason $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkMessage($var, \ChargeHive\Chtype\Reason::class);
        $this->reason = $var;

        return $this;
    }

}

