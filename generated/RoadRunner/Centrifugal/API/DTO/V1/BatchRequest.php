<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.BatchRequest</code>
 */
class BatchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Command commands = 1;</code>
     */
    private $commands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\Command[]|\Google\Protobuf\Internal\RepeatedField $commands
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Command commands = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Command commands = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\Command[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\Command::class);
        $this->commands = $arr;

        return $this;
    }

}

