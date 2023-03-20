<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/proxy/v1/proxy.proto

namespace RoadRunner\Centrifugal\Proxy\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.proxy.ConnectResponse</code>
 */
class ConnectResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.ConnectResult result = 1;</code>
     */
    protected $result = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Error error = 2;</code>
     */
    protected $error = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Disconnect disconnect = 3;</code>
     */
    protected $disconnect = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\Proxy\DTO\V1\ConnectResult $result
     *     @type \RoadRunner\Centrifugal\Proxy\DTO\V1\Error $error
     *     @type \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect $disconnect
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\Proxy\DTO\V1\GPBMetadata\Proxy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.ConnectResult result = 1;</code>
     * @return \RoadRunner\Centrifugal\Proxy\DTO\V1\ConnectResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.ConnectResult result = 1;</code>
     * @param \RoadRunner\Centrifugal\Proxy\DTO\V1\ConnectResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\Proxy\DTO\V1\ConnectResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Error error = 2;</code>
     * @return \RoadRunner\Centrifugal\Proxy\DTO\V1\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Error error = 2;</code>
     * @param \RoadRunner\Centrifugal\Proxy\DTO\V1\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\Proxy\DTO\V1\Error::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Disconnect disconnect = 3;</code>
     * @return \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect
     */
    public function getDisconnect()
    {
        return $this->disconnect;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Disconnect disconnect = 3;</code>
     * @param \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect $var
     * @return $this
     */
    public function setDisconnect($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect::class);
        $this->disconnect = $var;

        return $this;
    }

}

