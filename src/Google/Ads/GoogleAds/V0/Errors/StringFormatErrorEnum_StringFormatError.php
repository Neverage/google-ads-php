<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/string_format_error.proto

namespace Google\Ads\GoogleAds\V0\Errors;

/**
 * Enum describing possible string format errors.
 *
 * Protobuf enum <code>Google\Ads\Googleads\V0\Errors\StringFormatErrorEnum\StringFormatError</code>
 */
class StringFormatErrorEnum_StringFormatError
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
     * The input string value contains disallowed characters.
     *
     * Generated from protobuf enum <code>ILLEGAL_CHARS = 2;</code>
     */
    const ILLEGAL_CHARS = 2;
    /**
     * The input string value is invalid for the associated field.
     *
     * Generated from protobuf enum <code>INVALID_FORMAT = 3;</code>
     */
    const INVALID_FORMAT = 3;
}

