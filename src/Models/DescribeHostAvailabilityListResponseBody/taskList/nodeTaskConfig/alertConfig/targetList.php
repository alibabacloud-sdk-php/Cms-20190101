<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig\targetList\target;
use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @var target[]
     */
    public $target;
    protected $_name = [
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->target) {
            $res['Target'] = [];
            if (null !== $this->target && \is_array($this->target)) {
                $n = 0;
                foreach ($this->target as $item) {
                    $res['Target'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = [];
                $n             = 0;
                foreach ($map['Target'] as $item) {
                    $model->target[$n++] = null !== $item ? target::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
