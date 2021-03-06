<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\webhookParameters\webhookParameter;
use AlibabaCloud\Tea\Model;

class webhookParameters extends Model
{
    /**
     * @var webhookParameter[]
     */
    public $webhookParameter;
    protected $_name = [
        'webhookParameter' => 'WebhookParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webhookParameter) {
            $res['WebhookParameter'] = [];
            if (null !== $this->webhookParameter && \is_array($this->webhookParameter)) {
                $n = 0;
                foreach ($this->webhookParameter as $item) {
                    $res['WebhookParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhookParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebhookParameter'])) {
            if (!empty($map['WebhookParameter'])) {
                $model->webhookParameter = [];
                $n                       = 0;
                foreach ($map['WebhookParameter'] as $item) {
                    $model->webhookParameter[$n++] = null !== $item ? webhookParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
