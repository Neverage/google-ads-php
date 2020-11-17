<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/final_app_url.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A URL for deep linking into an app for the given operating system.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.FinalAppUrl</code>
 */
class FinalAppUrl extends \Google\Protobuf\Internal\Message
{
    /**
     * The operating system targeted by this URL. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.AppUrlOperatingSystemTypeEnum.AppUrlOperatingSystemType os_type = 1;</code>
     */
    protected $os_type = 0;
    /**
     * The app deep link URL. Deep links specify a location in an app that
     * corresponds to the content you'd like to show, and should be of the form
     * {scheme}://{host_path}
     * The scheme identifies which app to open. For your app, you can use a custom
     * scheme that starts with the app's name. The host and path specify the
     * unique location in the app where your content exists.
     * Example: "exampleapp://productid_1234". Required.
     *
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $os_type
     *           The operating system targeted by this URL. Required.
     *     @type string $url
     *           The app deep link URL. Deep links specify a location in an app that
     *           corresponds to the content you'd like to show, and should be of the form
     *           {scheme}://{host_path}
     *           The scheme identifies which app to open. For your app, you can use a custom
     *           scheme that starts with the app's name. The host and path specify the
     *           unique location in the app where your content exists.
     *           Example: "exampleapp://productid_1234". Required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Common\FinalAppUrl::initOnce();
        parent::__construct($data);
    }

    /**
     * The operating system targeted by this URL. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.AppUrlOperatingSystemTypeEnum.AppUrlOperatingSystemType os_type = 1;</code>
     * @return int
     */
    public function getOsType()
    {
        return $this->os_type;
    }

    /**
     * The operating system targeted by this URL. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.AppUrlOperatingSystemTypeEnum.AppUrlOperatingSystemType os_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOsType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\AppUrlOperatingSystemTypeEnum\AppUrlOperatingSystemType::class);
        $this->os_type = $var;

        return $this;
    }

    /**
     * The app deep link URL. Deep links specify a location in an app that
     * corresponds to the content you'd like to show, and should be of the form
     * {scheme}://{host_path}
     * The scheme identifies which app to open. For your app, you can use a custom
     * scheme that starts with the app's name. The host and path specify the
     * unique location in the app where your content exists.
     * Example: "exampleapp://productid_1234". Required.
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return isset($this->url) ? $this->url : '';
    }

    public function hasUrl()
    {
        return isset($this->url);
    }

    public function clearUrl()
    {
        unset($this->url);
    }

    /**
     * The app deep link URL. Deep links specify a location in an app that
     * corresponds to the content you'd like to show, and should be of the form
     * {scheme}://{host_path}
     * The scheme identifies which app to open. For your app, you can use a custom
     * scheme that starts with the app's name. The host and path specify the
     * unique location in the app where your content exists.
     * Example: "exampleapp://productid_1234". Required.
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

