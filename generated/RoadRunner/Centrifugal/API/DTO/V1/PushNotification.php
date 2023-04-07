<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.PushNotification</code>
 */
class PushNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.FcmPushNotification fcm = 1;</code>
     */
    protected $fcm = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HmsPushNotification hms = 2;</code>
     */
    protected $hms = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ApnsPushNotification apns = 3;</code>
     */
    protected $apns = null;
    /**
     * Generated from protobuf field <code>string uid = 4;</code>
     */
    protected $uid = '';
    /**
     * Generated from protobuf field <code>int64 expire_at = 5;</code>
     */
    protected $expire_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\FcmPushNotification $fcm
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\HmsPushNotification $hms
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\ApnsPushNotification $apns
     *     @type string $uid
     *     @type int|string $expire_at
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.FcmPushNotification fcm = 1;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\FcmPushNotification|null
     */
    public function getFcm()
    {
        return isset($this->fcm) ? $this->fcm : null;
    }

    public function hasFcm()
    {
        return isset($this->fcm);
    }

    public function clearFcm()
    {
        unset($this->fcm);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.FcmPushNotification fcm = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\FcmPushNotification $var
     * @return $this
     */
    public function setFcm($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\FcmPushNotification::class);
        $this->fcm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HmsPushNotification hms = 2;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\HmsPushNotification|null
     */
    public function getHms()
    {
        return isset($this->hms) ? $this->hms : null;
    }

    public function hasHms()
    {
        return isset($this->hms);
    }

    public function clearHms()
    {
        unset($this->hms);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HmsPushNotification hms = 2;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\HmsPushNotification $var
     * @return $this
     */
    public function setHms($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\HmsPushNotification::class);
        $this->hms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ApnsPushNotification apns = 3;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\ApnsPushNotification|null
     */
    public function getApns()
    {
        return isset($this->apns) ? $this->apns : null;
    }

    public function hasApns()
    {
        return isset($this->apns);
    }

    public function clearApns()
    {
        unset($this->apns);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ApnsPushNotification apns = 3;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\ApnsPushNotification $var
     * @return $this
     */
    public function setApns($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\ApnsPushNotification::class);
        $this->apns = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string uid = 4;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>string uid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 5;</code>
     * @return int|string
     */
    public function getExpireAt()
    {
        return $this->expire_at;
    }

    /**
     * Generated from protobuf field <code>int64 expire_at = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_at = $var;

        return $this;
    }

}

