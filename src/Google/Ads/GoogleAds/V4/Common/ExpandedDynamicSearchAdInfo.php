<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An expanded dynamic search ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.ExpandedDynamicSearchAdInfo</code>
 */
class ExpandedDynamicSearchAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     */
    protected $description = null;
    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 2;</code>
     */
    protected $description2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $description
     *           The description of the ad.
     *     @type \Google\Protobuf\StringValue $description2
     *           The second description of the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Returns the unboxed value from <code>getDescription2()</code>

     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 2;</code>
     * @return string|null
     */
    public function getDescription2Unwrapped()
    {
        return $this->readWrapperValue("description2");
    }

    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescription2Unwrapped($var)
    {
        $this->writeWrapperValue("description2", $var);
        return $this;}

}

