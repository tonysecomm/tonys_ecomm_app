<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/matching_function.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Matching function associated with a
 * CustomerFeed, CampaignFeed, or AdGroupFeed. The matching function is used
 * to filter the set of feed items selected.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.MatchingFunction</code>
 */
class MatchingFunction extends \Google\Protobuf\Internal\Message
{
    /**
     * String representation of the Function.
     * Examples:
     * 1. IDENTITY(true) or IDENTITY(false). All or no feed items served.
     * 2. EQUALS(CONTEXT.DEVICE,"Mobile")
     * 3. IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     * 4. CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     * 5. AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     * For more details, visit
     * https://developers.google.com/adwords/api/docs/guides/feed-matching-functions
     * Note that because multiple strings may represent the same underlying
     * function (whitespace and single versus double quotation marks, for
     * example), the value returned may not be identical to the string sent in a
     * mutate request.
     *
     * Generated from protobuf field <code>string function_string = 5;</code>
     */
    protected $function_string = null;
    /**
     * Operator for a function.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator operator = 4;</code>
     */
    protected $operator = 0;
    /**
     * The operands on the left hand side of the equation. This is also the
     * operand to be used for single operand expressions such as NOT.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.Operand left_operands = 2;</code>
     */
    private $left_operands;
    /**
     * The operands on the right hand side of the equation.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.Operand right_operands = 3;</code>
     */
    private $right_operands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $function_string
     *           String representation of the Function.
     *           Examples:
     *           1. IDENTITY(true) or IDENTITY(false). All or no feed items served.
     *           2. EQUALS(CONTEXT.DEVICE,"Mobile")
     *           3. IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     *           4. CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     *           5. AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     *           For more details, visit
     *           https://developers.google.com/adwords/api/docs/guides/feed-matching-functions
     *           Note that because multiple strings may represent the same underlying
     *           function (whitespace and single versus double quotation marks, for
     *           example), the value returned may not be identical to the string sent in a
     *           mutate request.
     *     @type int $operator
     *           Operator for a function.
     *     @type \Google\Ads\GoogleAds\V8\Common\Operand[]|\Google\Protobuf\Internal\RepeatedField $left_operands
     *           The operands on the left hand side of the equation. This is also the
     *           operand to be used for single operand expressions such as NOT.
     *     @type \Google\Ads\GoogleAds\V8\Common\Operand[]|\Google\Protobuf\Internal\RepeatedField $right_operands
     *           The operands on the right hand side of the equation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * String representation of the Function.
     * Examples:
     * 1. IDENTITY(true) or IDENTITY(false). All or no feed items served.
     * 2. EQUALS(CONTEXT.DEVICE,"Mobile")
     * 3. IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     * 4. CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     * 5. AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     * For more details, visit
     * https://developers.google.com/adwords/api/docs/guides/feed-matching-functions
     * Note that because multiple strings may represent the same underlying
     * function (whitespace and single versus double quotation marks, for
     * example), the value returned may not be identical to the string sent in a
     * mutate request.
     *
     * Generated from protobuf field <code>string function_string = 5;</code>
     * @return string
     */
    public function getFunctionString()
    {
        return isset($this->function_string) ? $this->function_string : '';
    }

    public function hasFunctionString()
    {
        return isset($this->function_string);
    }

    public function clearFunctionString()
    {
        unset($this->function_string);
    }

    /**
     * String representation of the Function.
     * Examples:
     * 1. IDENTITY(true) or IDENTITY(false). All or no feed items served.
     * 2. EQUALS(CONTEXT.DEVICE,"Mobile")
     * 3. IN(FEED_ITEM_ID,{1000001,1000002,1000003})
     * 4. CONTAINS_ANY(FeedAttribute[12345678,0],{"Mars cruise","Venus cruise"})
     * 5. AND(IN(FEED_ITEM_ID,{10001,10002}),EQUALS(CONTEXT.DEVICE,"Mobile"))
     * For more details, visit
     * https://developers.google.com/adwords/api/docs/guides/feed-matching-functions
     * Note that because multiple strings may represent the same underlying
     * function (whitespace and single versus double quotation marks, for
     * example), the value returned may not be identical to the string sent in a
     * mutate request.
     *
     * Generated from protobuf field <code>string function_string = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionString($var)
    {
        GPBUtil::checkString($var, True);
        $this->function_string = $var;

        return $this;
    }

    /**
     * Operator for a function.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator operator = 4;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Operator for a function.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator operator = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\MatchingFunctionOperatorEnum\MatchingFunctionOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * The operands on the left hand side of the equation. This is also the
     * operand to be used for single operand expressions such as NOT.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.Operand left_operands = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeftOperands()
    {
        return $this->left_operands;
    }

    /**
     * The operands on the left hand side of the equation. This is also the
     * operand to be used for single operand expressions such as NOT.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.Operand left_operands = 2;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\Operand[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeftOperands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V8\Common\Operand::class);
        $this->left_operands = $arr;

        return $this;
    }

    /**
     * The operands on the right hand side of the equation.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.Operand right_operands = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRightOperands()
    {
        return $this->right_operands;
    }

    /**
     * The operands on the right hand side of the equation.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.Operand right_operands = 3;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\Operand[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRightOperands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V8\Common\Operand::class);
        $this->right_operands = $arr;

        return $this;
    }

}

