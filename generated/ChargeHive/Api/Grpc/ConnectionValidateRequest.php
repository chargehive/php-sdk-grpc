<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.ConnectionValidateRequest</code>
 */
class ConnectionValidateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \ChargeHive\Api\Grpc\Metadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

