<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/ad_group_criterion_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for an ad group criterion mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.MutateAdGroupCriteriaResponse</code>
 */
class MutateAdGroupCriteriaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.MutateAdGroupCriterionResult results = 2;</code>
     */
    private $results;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\AdGroupCriterionService::initOnce();
        parent::__construct();
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.MutateAdGroupCriterionResult results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.MutateAdGroupCriterionResult results = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\MutateAdGroupCriterionResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\MutateAdGroupCriterionResult::class);
        $this->results = $arr;

        return $this;
    }

}

