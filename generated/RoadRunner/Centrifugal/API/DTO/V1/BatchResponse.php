<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.BatchResponse</code>
 */
class BatchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Reply replies = 1;</code>
     */
    private $replies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\Reply[]|\Google\Protobuf\Internal\RepeatedField $replies
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Reply replies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Reply replies = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\Reply[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\Reply::class);
        $this->replies = $arr;

        return $this;
    }

}

