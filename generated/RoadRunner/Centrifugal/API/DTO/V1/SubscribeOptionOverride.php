<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.SubscribeOptionOverride</code>
 */
class SubscribeOptionOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue presence = 1;</code>
     */
    protected $presence = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue join_leave = 2;</code>
     */
    protected $join_leave = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_recovery = 3;</code>
     */
    protected $force_recovery = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_positioning = 4;</code>
     */
    protected $force_positioning = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_push_join_leave = 5;</code>
     */
    protected $force_push_join_leave = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $presence
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $join_leave
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $force_recovery
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $force_positioning
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $force_push_join_leave
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue presence = 1;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BoolValue
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue presence = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $var
     * @return $this
     */
    public function setPresence($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BoolValue::class);
        $this->presence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue join_leave = 2;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BoolValue
     */
    public function getJoinLeave()
    {
        return $this->join_leave;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue join_leave = 2;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $var
     * @return $this
     */
    public function setJoinLeave($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BoolValue::class);
        $this->join_leave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_recovery = 3;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BoolValue
     */
    public function getForceRecovery()
    {
        return $this->force_recovery;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_recovery = 3;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $var
     * @return $this
     */
    public function setForceRecovery($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BoolValue::class);
        $this->force_recovery = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_positioning = 4;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BoolValue
     */
    public function getForcePositioning()
    {
        return $this->force_positioning;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_positioning = 4;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $var
     * @return $this
     */
    public function setForcePositioning($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BoolValue::class);
        $this->force_positioning = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_push_join_leave = 5;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BoolValue
     */
    public function getForcePushJoinLeave()
    {
        return $this->force_push_join_leave;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BoolValue force_push_join_leave = 5;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BoolValue $var
     * @return $this
     */
    public function setForcePushJoinLeave($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BoolValue::class);
        $this->force_push_join_leave = $var;

        return $this;
    }

}

