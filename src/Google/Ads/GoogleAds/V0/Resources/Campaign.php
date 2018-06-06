<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/campaign.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.Campaign</code>
 */
class Campaign extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * The name of the campaign.
     * This field is required and should not be empty when creating new
     * campaigns.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The status of the campaign.
     * When a new campaign is added, the status defaults to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignStatusEnum.CampaignStatus status = 5;</code>
     */
    private $status = 0;
    /**
     * The ad serving status of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignServingStatusEnum.CampaignServingStatus serving_status = 21;</code>
     */
    private $serving_status = 0;
    /**
     * The ad serving optimization status of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatus ad_serving_optimization_status = 8;</code>
     */
    private $ad_serving_optimization_status = 0;
    /**
     * The primary serving target for ads within the campaign.
     * The targeting options can be refined in `network_settings`.
     * Can be set only when creating campaigns.
     * After the campaign is created, the field can not be changed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_type = 9;</code>
     */
    private $advertising_channel_type = 0;
    /**
     * Optional refinement to `advertising_channel_type`.
     * Must be a valid sub-type of the parent channel type.
     * Can be set only when creating campaigns.
     * After campaign is created, the field can not be changed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType advertising_channel_sub_type = 10;</code>
     */
    private $advertising_channel_sub_type = 0;
    /**
     * The URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 11;</code>
     */
    private $tracking_url_template = null;
    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.common.CustomParameter url_custom_parameters = 12;</code>
     */
    private $url_custom_parameters;
    /**
     * The network settings for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.NetworkSettings network_settings = 14;</code>
     */
    private $network_settings = null;
    /**
     * The hotel setting for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.HotelSettingInfo hotel_setting = 32;</code>
     */
    private $hotel_setting = null;
    /**
     * The setting for controlling Dynamic Search Ads (DSA).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.DynamicSearchAdsSetting dynamic_search_ads_setting = 33;</code>
     */
    private $dynamic_search_ads_setting = null;
    /**
     * The budget of the campaign.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 6;</code>
     */
    private $campaign_budget = null;
    /**
     * The type of bidding strategy.
     * A bidding strategy can be created by setting either the bidding scheme to
     * create a standard bidding strategy or the `bidding_strategy` field to
     * create a portfolio bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BiddingStrategyTypeEnum.BiddingStrategyType bidding_strategy_type = 22;</code>
     */
    private $bidding_strategy_type = 0;
    /**
     * The date when campaign started.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 19;</code>
     */
    private $start_date = null;
    /**
     * The date when campaign ended.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 20;</code>
     */
    private $end_date = null;
    protected $campaign_bidding_strategy;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Campaign::initOnce();
        parent::__construct();
    }

    /**
     * The resource name of the campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the campaign.
     * This field is required and should not be empty when creating new
     * campaigns.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the campaign.
     * This field is required and should not be empty when creating new
     * campaigns.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The status of the campaign.
     * When a new campaign is added, the status defaults to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignStatusEnum.CampaignStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the campaign.
     * When a new campaign is added, the status defaults to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignStatusEnum.CampaignStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\CampaignStatusEnum_CampaignStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The ad serving status of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignServingStatusEnum.CampaignServingStatus serving_status = 21;</code>
     * @return int
     */
    public function getServingStatus()
    {
        return $this->serving_status;
    }

    /**
     * The ad serving status of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.CampaignServingStatusEnum.CampaignServingStatus serving_status = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setServingStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\CampaignServingStatusEnum_CampaignServingStatus::class);
        $this->serving_status = $var;

        return $this;
    }

    /**
     * The ad serving optimization status of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatus ad_serving_optimization_status = 8;</code>
     * @return int
     */
    public function getAdServingOptimizationStatus()
    {
        return $this->ad_serving_optimization_status;
    }

    /**
     * The ad serving optimization status of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatus ad_serving_optimization_status = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAdServingOptimizationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\AdServingOptimizationStatusEnum_AdServingOptimizationStatus::class);
        $this->ad_serving_optimization_status = $var;

        return $this;
    }

    /**
     * The primary serving target for ads within the campaign.
     * The targeting options can be refined in `network_settings`.
     * Can be set only when creating campaigns.
     * After the campaign is created, the field can not be changed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_type = 9;</code>
     * @return int
     */
    public function getAdvertisingChannelType()
    {
        return $this->advertising_channel_type;
    }

    /**
     * The primary serving target for ads within the campaign.
     * The targeting options can be refined in `network_settings`.
     * Can be set only when creating campaigns.
     * After the campaign is created, the field can not be changed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setAdvertisingChannelType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\AdvertisingChannelTypeEnum_AdvertisingChannelType::class);
        $this->advertising_channel_type = $var;

        return $this;
    }

    /**
     * Optional refinement to `advertising_channel_type`.
     * Must be a valid sub-type of the parent channel type.
     * Can be set only when creating campaigns.
     * After campaign is created, the field can not be changed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType advertising_channel_sub_type = 10;</code>
     * @return int
     */
    public function getAdvertisingChannelSubType()
    {
        return $this->advertising_channel_sub_type;
    }

    /**
     * Optional refinement to `advertising_channel_type`.
     * Must be a valid sub-type of the parent channel type.
     * Can be set only when creating campaigns.
     * After campaign is created, the field can not be changed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType advertising_channel_sub_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setAdvertisingChannelSubType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\AdvertisingChannelSubTypeEnum_AdvertisingChannelSubType::class);
        $this->advertising_channel_sub_type = $var;

        return $this;
    }

    /**
     * The URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return $this->tracking_url_template;
    }

    /**
     * The URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.common.CustomParameter url_custom_parameters = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.common.CustomParameter url_custom_parameters = 12;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * The network settings for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.NetworkSettings network_settings = 14;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\Campaign_NetworkSettings
     */
    public function getNetworkSettings()
    {
        return $this->network_settings;
    }

    /**
     * The network settings for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.NetworkSettings network_settings = 14;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\Campaign_NetworkSettings $var
     * @return $this
     */
    public function setNetworkSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\Campaign_NetworkSettings::class);
        $this->network_settings = $var;

        return $this;
    }

    /**
     * The hotel setting for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.HotelSettingInfo hotel_setting = 32;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\Campaign_HotelSettingInfo
     */
    public function getHotelSetting()
    {
        return $this->hotel_setting;
    }

    /**
     * The hotel setting for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.HotelSettingInfo hotel_setting = 32;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\Campaign_HotelSettingInfo $var
     * @return $this
     */
    public function setHotelSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\Campaign_HotelSettingInfo::class);
        $this->hotel_setting = $var;

        return $this;
    }

    /**
     * The setting for controlling Dynamic Search Ads (DSA).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.DynamicSearchAdsSetting dynamic_search_ads_setting = 33;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\Campaign_DynamicSearchAdsSetting
     */
    public function getDynamicSearchAdsSetting()
    {
        return $this->dynamic_search_ads_setting;
    }

    /**
     * The setting for controlling Dynamic Search Ads (DSA).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Campaign.DynamicSearchAdsSetting dynamic_search_ads_setting = 33;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\Campaign_DynamicSearchAdsSetting $var
     * @return $this
     */
    public function setDynamicSearchAdsSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\Campaign_DynamicSearchAdsSetting::class);
        $this->dynamic_search_ads_setting = $var;

        return $this;
    }

    /**
     * The budget of the campaign.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignBudget()
    {
        return $this->campaign_budget;
    }

    /**
     * The budget of the campaign.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_budget = $var;

        return $this;
    }

    /**
     * The type of bidding strategy.
     * A bidding strategy can be created by setting either the bidding scheme to
     * create a standard bidding strategy or the `bidding_strategy` field to
     * create a portfolio bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BiddingStrategyTypeEnum.BiddingStrategyType bidding_strategy_type = 22;</code>
     * @return int
     */
    public function getBiddingStrategyType()
    {
        return $this->bidding_strategy_type;
    }

    /**
     * The type of bidding strategy.
     * A bidding strategy can be created by setting either the bidding scheme to
     * create a standard bidding strategy or the `bidding_strategy` field to
     * create a portfolio bidding strategy.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.BiddingStrategyTypeEnum.BiddingStrategyType bidding_strategy_type = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setBiddingStrategyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\BiddingStrategyTypeEnum_BiddingStrategyType::class);
        $this->bidding_strategy_type = $var;

        return $this;
    }

    /**
     * The date when campaign started.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 19;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * The date when campaign started.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 19;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * The date when campaign ended.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 20;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * The date when campaign ended.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 20;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Portfolio bidding strategy used by campaign.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bidding_strategy = 23;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBiddingStrategy()
    {
        return $this->readOneof(23);
    }

    /**
     * Portfolio bidding strategy used by campaign.
     * This field must not be used in WHERE clauses.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue bidding_strategy = 23;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBiddingStrategy($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Standard Manual CPC bidding strategy.
     * Manual click-based bidding where user pays per click.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.ManualCpc manual_cpc = 24;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\ManualCpc
     */
    public function getManualCpc()
    {
        return $this->readOneof(24);
    }

    /**
     * Standard Manual CPC bidding strategy.
     * Manual click-based bidding where user pays per click.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.ManualCpc manual_cpc = 24;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\ManualCpc $var
     * @return $this
     */
    public function setManualCpc($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\ManualCpc::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * Standard Manual CPM bidding strategy.
     * Manual impression-based bidding where user pays per thousand
     * impressions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.ManualCpm manual_cpm = 25;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\ManualCpm
     */
    public function getManualCpm()
    {
        return $this->readOneof(25);
    }

    /**
     * Standard Manual CPM bidding strategy.
     * Manual impression-based bidding where user pays per thousand
     * impressions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.ManualCpm manual_cpm = 25;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\ManualCpm $var
     * @return $this
     */
    public function setManualCpm($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\ManualCpm::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * Standard Maximize Conversions bidding strategy that automatically
     * maximizes number of conversions given a daily budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.MaximizeConversions maximize_conversions = 30;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\MaximizeConversions
     */
    public function getMaximizeConversions()
    {
        return $this->readOneof(30);
    }

    /**
     * Standard Maximize Conversions bidding strategy that automatically
     * maximizes number of conversions given a daily budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.MaximizeConversions maximize_conversions = 30;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\MaximizeConversions $var
     * @return $this
     */
    public function setMaximizeConversions($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\MaximizeConversions::class);
        $this->writeOneof(30, $var);

        return $this;
    }

    /**
     * Standard Maximize Conversion Value bidding strategy that automatically
     * sets bids to maximize revenue while spending your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.MaximizeConversionValue maximize_conversion_value = 31;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\MaximizeConversionValue
     */
    public function getMaximizeConversionValue()
    {
        return $this->readOneof(31);
    }

    /**
     * Standard Maximize Conversion Value bidding strategy that automatically
     * sets bids to maximize revenue while spending your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.MaximizeConversionValue maximize_conversion_value = 31;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\MaximizeConversionValue $var
     * @return $this
     */
    public function setMaximizeConversionValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\MaximizeConversionValue::class);
        $this->writeOneof(31, $var);

        return $this;
    }

    /**
     * Standard Target CPA bidding strategy that automatically sets bids to
     * help get as many conversions as possible at the target
     * cost-per-acquisition (CPA) you set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetCpa target_cpa = 26;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetCpa
     */
    public function getTargetCpa()
    {
        return $this->readOneof(26);
    }

    /**
     * Standard Target CPA bidding strategy that automatically sets bids to
     * help get as many conversions as possible at the target
     * cost-per-acquisition (CPA) you set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetCpa target_cpa = 26;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetCpa $var
     * @return $this
     */
    public function setTargetCpa($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetCpa::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * Standard Target ROAS bidding strategy that automatically maximizes
     * revenue while averaging a specific target return on ad spend (ROAS).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetRoas target_roas = 29;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetRoas
     */
    public function getTargetRoas()
    {
        return $this->readOneof(29);
    }

    /**
     * Standard Target ROAS bidding strategy that automatically maximizes
     * revenue while averaging a specific target return on ad spend (ROAS).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetRoas target_roas = 29;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetRoas $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetRoas::class);
        $this->writeOneof(29, $var);

        return $this;
    }

    /**
     * Standard Target Spend bidding strategy that automatically sets your bids
     * to help get as many clicks as possible within your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetSpend target_spend = 27;</code>
     * @return \Google\Ads\GoogleAds\V0\Common\TargetSpend
     */
    public function getTargetSpend()
    {
        return $this->readOneof(27);
    }

    /**
     * Standard Target Spend bidding strategy that automatically sets your bids
     * to help get as many clicks as possible within your budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.common.TargetSpend target_spend = 27;</code>
     * @param \Google\Ads\GoogleAds\V0\Common\TargetSpend $var
     * @return $this
     */
    public function setTargetSpend($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Common\TargetSpend::class);
        $this->writeOneof(27, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignBiddingStrategy()
    {
        return $this->whichOneof("campaign_bidding_strategy");
    }

}

