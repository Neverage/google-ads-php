<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/customer_negative_criterion_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create or remove) on a customer level negative criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.CustomerNegativeCriterionOperation</code>
 */
class CustomerNegativeCriterionOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V3\Resources\CustomerNegativeCriterion $create
     *           Create operation: No resource name is expected for the new criterion.
     *     @type string $remove
     *           Remove operation: A resource name for the removed criterion is expected,
     *           in this format:
     *           `customers/{customer_id}/customerNegativeCriteria/{criterion_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Services\CustomerNegativeCriterionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Create operation: No resource name is expected for the new criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.CustomerNegativeCriterion create = 1;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\CustomerNegativeCriterion
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.CustomerNegativeCriterion create = 1;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\CustomerNegativeCriterion $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\CustomerNegativeCriterion::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed criterion is expected,
     * in this format:
     * `customers/{customer_id}/customerNegativeCriteria/{criterion_id}`
     *
     * Generated from protobuf field <code>string remove = 2;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    /**
     * Remove operation: A resource name for the removed criterion is expected,
     * in this format:
     * `customers/{customer_id}/customerNegativeCriteria/{criterion_id}`
     *
     * Generated from protobuf field <code>string remove = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}
