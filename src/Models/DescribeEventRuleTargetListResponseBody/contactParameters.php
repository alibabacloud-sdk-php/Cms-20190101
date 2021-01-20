<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\contactParameters\contactParameter;
use AlibabaCloud\Tea\Model;

class contactParameters extends Model
{
    /**
     * @var contactParameter[]
     */
    public $contactParameter;
    protected $_name = [
        'contactParameter' => 'ContactParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactParameter) {
            $res['ContactParameter'] = [];
            if (null !== $this->contactParameter && \is_array($this->contactParameter)) {
                $n = 0;
                foreach ($this->contactParameter as $item) {
                    $res['ContactParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactParameter'])) {
            if (!empty($map['ContactParameter'])) {
                $model->contactParameter = [];
                $n                       = 0;
                foreach ($map['ContactParameter'] as $item) {
                    $model->contactParameter[$n++] = null !== $item ? contactParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
