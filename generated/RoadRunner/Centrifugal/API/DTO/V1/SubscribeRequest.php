<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.SubscribeRequest</code>
 */
class SubscribeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string channel = 1;</code>
     */
    protected $channel = '';
    /**
     * Generated from protobuf field <code>string user = 2;</code>
     */
    protected $user = '';
    /**
     * Generated from protobuf field <code>int64 expire_at = 3;</code>
     */
    protected $expire_at = 0;
    /**
     * Generated from protobuf field <code>bytes info = 4;</code>
     */
    protected $info = '';
    /**
     * Generated from protobuf field <code>string b64info = 5;</code>
     */
    protected $b64info = '';
    /**
     * Generated from protobuf field <code>string client = 6;</code>
     */
    protected $client = '';
    /**
     * Generated from protobuf field <code>bytes data = 7;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>string b64data = 8;</code>
     */
    protected $b64data = '';
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.StreamPosition recover_since = 9;</code>
     */
    protected $recover_since = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SubscribeOptionOverride override = 10;</code>
     */
    protected $override = null;
    /**
     * Generated from protobuf field <code>string session = 11;</code>
     */
    protected $session = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel
     *     @type string $user
     *     @type int|string $expire_at
     *     @type string $info
     *     @type string $b64info
     *     @type string $client
     *     @type string $data
     *     @type string $b64data
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\StreamPosition $recover_since
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\SubscribeOptionOverride $override
     *     @type string $session
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string channel = 1;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Generated from protobuf field <code>string channel = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user = 2;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>string user = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 3;</code>
     * @return int|string
     */
    public function getExpireAt()
    {
        return $this->expire_at;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes info = 4;</code>
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Generated from protobuf field <code>bytes info = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkString($var, False);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string b64info = 5;</code>
     * @return string
     */
    public function getB64Info()
    {
        return $this->b64info;
    }

    /**
     * Generated from protobuf field <code>string b64info = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setB64Info($var)
    {
        GPBUtil::checkString($var, True);
        $this->b64info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client = 6;</code>
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Generated from protobuf field <code>string client = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->client = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 7;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string b64data = 8;</code>
     * @return string
     */
    public function getB64Data()
    {
        return $this->b64data;
    }

    /**
     * Generated from protobuf field <code>string b64data = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setB64Data($var)
    {
        GPBUtil::checkString($var, True);
        $this->b64data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.StreamPosition recover_since = 9;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\StreamPosition|null
     */
    public function getRecoverSince()
    {
        return isset($this->recover_since) ? $this->recover_since : null;
    }

    public function hasRecoverSince()
    {
        return isset($this->recover_since);
    }

    public function clearRecoverSince()
    {
        unset($this->recover_since);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.StreamPosition recover_since = 9;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\StreamPosition $var
     * @return $this
     */
    public function setRecoverSince($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\StreamPosition::class);
        $this->recover_since = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SubscribeOptionOverride override = 10;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\SubscribeOptionOverride|null
     */
    public function getOverride()
    {
        return isset($this->override) ? $this->override : null;
    }

    public function hasOverride()
    {
        return isset($this->override);
    }

    public function clearOverride()
    {
        unset($this->override);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SubscribeOptionOverride override = 10;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\SubscribeOptionOverride $var
     * @return $this
     */
    public function setOverride($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\SubscribeOptionOverride::class);
        $this->override = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string session = 11;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Generated from protobuf field <code>string session = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

}

