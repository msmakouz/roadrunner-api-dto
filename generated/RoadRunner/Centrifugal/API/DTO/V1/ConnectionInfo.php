<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ConnectionInfo</code>
 */
class ConnectionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string app_name = 1;</code>
     */
    protected $app_name = '';
    /**
     * Generated from protobuf field <code>string app_version = 2;</code>
     */
    protected $app_version = '';
    /**
     * Generated from protobuf field <code>string transport = 3;</code>
     */
    protected $transport = '';
    /**
     * Generated from protobuf field <code>string protocol = 4;</code>
     */
    protected $protocol = '';
    /**
     * 5-7 dropped for backwards compatibility.
     *
     * Generated from protobuf field <code>string user = 8;</code>
     */
    protected $user = '';
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionState state = 9;</code>
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_name
     *     @type string $app_version
     *     @type string $transport
     *     @type string $protocol
     *     @type string $user
     *           5-7 dropped for backwards compatibility.
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\ConnectionState $state
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string app_name = 1;</code>
     * @return string
     */
    public function getAppName()
    {
        return $this->app_name;
    }

    /**
     * Generated from protobuf field <code>string app_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppName($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_version = 2;</code>
     * @return string
     */
    public function getAppVersion()
    {
        return $this->app_version;
    }

    /**
     * Generated from protobuf field <code>string app_version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transport = 3;</code>
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Generated from protobuf field <code>string transport = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransport($var)
    {
        GPBUtil::checkString($var, True);
        $this->transport = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string protocol = 4;</code>
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Generated from protobuf field <code>string protocol = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol = $var;

        return $this;
    }

    /**
     * 5-7 dropped for backwards compatibility.
     *
     * Generated from protobuf field <code>string user = 8;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 5-7 dropped for backwards compatibility.
     *
     * Generated from protobuf field <code>string user = 8;</code>
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
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionState state = 9;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\ConnectionState|null
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : null;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionState state = 9;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\ConnectionState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\ConnectionState::class);
        $this->state = $var;

        return $this;
    }

}

