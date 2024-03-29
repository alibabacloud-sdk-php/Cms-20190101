<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponseBody\resources;

use AlibabaCloud\Tea\Model;

class alertResult extends Model
{
    /**
     * @description The status code that is returned for the alert rule.
     *
     * >  The status code 200 indicates that the call is successful.
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The error message that is returned for the alert rule.
     *
     * @example Metric not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the alert rule.
     *
     * @example 456789
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example ECS_Rule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Indicates whether the alert rule was created. Valid value:
     *
     * - false: The alert rule failed to be created.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'     => 'Code',
        'message'  => 'Message',
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
        'success'  => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
