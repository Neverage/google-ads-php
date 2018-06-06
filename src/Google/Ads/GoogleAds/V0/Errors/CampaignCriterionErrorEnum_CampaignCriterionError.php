<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/campaign_criterion_error.proto

namespace Google\Ads\GoogleAds\V0\Errors;

/**
 * Enum describing possible campaign criterion errors.
 *
 * Protobuf enum <code>Google\Ads\Googleads\V0\Errors\CampaignCriterionErrorEnum\CampaignCriterionError</code>
 */
class CampaignCriterionErrorEnum_CampaignCriterionError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Concrete type of criterion (keyword v.s. placement) is required for
     * CREATE and UPDATE operations.
     *
     * Generated from protobuf enum <code>CONCRETE_TYPE_REQUIRED = 2;</code>
     */
    const CONCRETE_TYPE_REQUIRED = 2;
    /**
     * Invalid placement URL.
     *
     * Generated from protobuf enum <code>INVALID_PLACEMENT_URL = 3;</code>
     */
    const INVALID_PLACEMENT_URL = 3;
    /**
     * Criteria type can not be excluded for the campaign by the customer. like
     * AOL account type cannot target site type criteria
     *
     * Generated from protobuf enum <code>CANNOT_EXCLUDE_CRITERIA_TYPE = 4;</code>
     */
    const CANNOT_EXCLUDE_CRITERIA_TYPE = 4;
    /**
     * Cannot set the campaign criterion status for this criteria type.
     *
     * Generated from protobuf enum <code>CANNOT_SET_STATUS_FOR_CRITERIA_TYPE = 5;</code>
     */
    const CANNOT_SET_STATUS_FOR_CRITERIA_TYPE = 5;
    /**
     * Cannot set the campaign criterion status for an excluded criteria.
     *
     * Generated from protobuf enum <code>CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA = 6;</code>
     */
    const CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA = 6;
    /**
     * Cannot target and exclude the same criterion.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_AND_EXCLUDE = 7;</code>
     */
    const CANNOT_TARGET_AND_EXCLUDE = 7;
    /**
     * The mutate contained too many operations.
     *
     * Generated from protobuf enum <code>TOO_MANY_OPERATIONS = 8;</code>
     */
    const TOO_MANY_OPERATIONS = 8;
    /**
     * This operator cannot be applied to a criterion of this type.
     *
     * Generated from protobuf enum <code>OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE = 9;</code>
     */
    const OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE = 9;
    /**
     * The Shopping campaign sales country is not supported for
     * ProductSalesChannel targeting.
     *
     * Generated from protobuf enum <code>SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL = 10;</code>
     */
    const SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL = 10;
    /**
     * The existing field can't be updated with CREATE operation. It can be
     * updated with UPDATE operation only.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_EXISTING_FIELD = 11;</code>
     */
    const CANNOT_ADD_EXISTING_FIELD = 11;
}

