<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody\hosts\host;
use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @var host[]
     */
    public $host;
    protected $_name = [
        'host' => 'Host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = [];
            if (null !== $this->host && \is_array($this->host)) {
                $n = 0;
                foreach ($this->host as $item) {
                    $res['Host'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            if (!empty($map['Host'])) {
                $model->host = [];
                $n           = 0;
                foreach ($map['Host'] as $item) {
                    $model->host[$n++] = null !== $item ? host::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
