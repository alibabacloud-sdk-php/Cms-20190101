<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Tea\Model;

class phone extends Model
{
    /**
     * @description The quota of processed log data in log monitoring in your purchased plan. Unit: MB/min.
     *
     * @example 550
     *
     * @var int
     */
    public $quotaLimit;

    /**
     * @description The ID of the request.
     *
     * @example 500
     *
     * @var int
     */
    public $quotaPackage;

    /**
     * @description The quota of API operation calls in your purchased plan. Unit: 10,000 calls.
     *
     * @example 100
     *
     * @var int
     */
    public $quotaUsed;
    protected $_name = [
        'quotaLimit'   => 'QuotaLimit',
        'quotaPackage' => 'QuotaPackage',
        'quotaUsed'    => 'QuotaUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaLimit) {
            $res['QuotaLimit'] = $this->quotaLimit;
        }
        if (null !== $this->quotaPackage) {
            $res['QuotaPackage'] = $this->quotaPackage;
        }
        if (null !== $this->quotaUsed) {
            $res['QuotaUsed'] = $this->quotaUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaLimit'])) {
            $model->quotaLimit = $map['QuotaLimit'];
        }
        if (isset($map['QuotaPackage'])) {
            $model->quotaPackage = $map['QuotaPackage'];
        }
        if (isset($map['QuotaUsed'])) {
            $model->quotaUsed = $map['QuotaUsed'];
        }

        return $model;
    }
}
