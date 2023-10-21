<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest\groupMetricRules;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The tag key of the alert rule. The specified tag is contained in alert notifications.
     *
     * Valid values of N: 1 to 200.
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the alert rule. The specified tag is contained in alert notifications.
     *
     * Valid values of N: 1 to 200.
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
