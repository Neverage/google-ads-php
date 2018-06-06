<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/custom_parameter.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mapping that can be used by custom parameter tags in a
 * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.CustomParameter</code>
 */
class CustomParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * The key matching the parameter tag name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue key = 1;</code>
     */
    private $key = null;
    /**
     * The value to be substituted.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     */
    private $value = null;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\CustomParameter::initOnce();
        parent::__construct();
    }

    /**
     * The key matching the parameter tag name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue key = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The key matching the parameter tag name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue key = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->key = $var;

        return $this;
    }

    /**
     * The value to be substituted.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value to be substituted.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->value = $var;

        return $this;
    }

}

