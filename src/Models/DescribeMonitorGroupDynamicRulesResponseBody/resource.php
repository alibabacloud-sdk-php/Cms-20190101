<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource\resource[]
     */
    public $resource;
    protected $_name = [
        'resource' => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = [];
            if (null !== $this->resource && \is_array($this->resource)) {
                $n = 0;
                foreach ($this->resource as $item) {
                    $res['Resource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n               = 0;
                foreach ($map['Resource'] as $item) {
                    $model->resource[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource\resource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
