<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/ad_group_criterion_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AdGroupCriterionService.MutateAdGroupCriteria][google.ads.googleads.v0.services.AdGroupCriterionService.MutateAdGroupCriteria].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.MutateAdGroupCriteriaRequest</code>
 */
class MutateAdGroupCriteriaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the customer whose criteria are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    private $customer_id = '';
    /**
     * The list of operations to perform on individual criteria.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.AdGroupCriterionOperation operations = 2;</code>
     */
    private $operations;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\AdGroupCriterionService::initOnce();
        parent::__construct();
    }

    /**
     * ID of the customer whose criteria are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * ID of the customer whose criteria are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The list of operations to perform on individual criteria.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.AdGroupCriterionOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * The list of operations to perform on individual criteria.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.AdGroupCriterionOperation operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\AdGroupCriterionOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\AdGroupCriterionOperation::class);
        $this->operations = $arr;

        return $this;
    }

}

