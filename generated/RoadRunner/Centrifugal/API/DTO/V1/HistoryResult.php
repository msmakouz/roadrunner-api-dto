<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.HistoryResult</code>
 */
class HistoryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Publication publications = 1;</code>
     */
    private $publications;
    /**
     * Generated from protobuf field <code>string epoch = 2;</code>
     */
    protected $epoch = '';
    /**
     * Generated from protobuf field <code>uint64 offset = 3;</code>
     */
    protected $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\Publication[]|\Google\Protobuf\Internal\RepeatedField $publications
     *     @type string $epoch
     *     @type int|string $offset
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Publication publications = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Publication publications = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\Publication[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPublications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\Publication::class);
        $this->publications = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string epoch = 2;</code>
     * @return string
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * Generated from protobuf field <code>string epoch = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEpoch($var)
    {
        GPBUtil::checkString($var, True);
        $this->epoch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 offset = 3;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>uint64 offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint64($var);
        $this->offset = $var;

        return $this;
    }

}

