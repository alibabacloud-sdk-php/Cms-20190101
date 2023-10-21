<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Tea\Model;

class enterpriseQuota extends Model
{
    /**
     * @description The ID of the instance monitored by Hybrid Cloud Monitoring.
     *
     * @example cms_enterprise_public_cn-7mz27pd****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The description of Hybrid Cloud Monitoring.
     *
     * @example ENTERPRISE
     *
     * @var string
     */
    public $suitInfo;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'suitInfo'   => 'SuitInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->suitInfo) {
            $res['SuitInfo'] = $this->suitInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enterpriseQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SuitInfo'])) {
            $model->suitInfo = $map['SuitInfo'];
        }

        return $model;
    }
}
