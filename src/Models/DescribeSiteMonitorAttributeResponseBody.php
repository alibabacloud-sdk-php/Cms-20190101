<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;
use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorAttributeResponseBody extends Model
{
    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The consecutive number of times for which the metric value is measured before an alert is triggered.
     *
     * @var metricRules
     */
    public $metricRules;

    /**
     * @description The details of the site monitoring task.
     *
     * @example D17DF650-7EBD-54D0-903A-1D4E624D7402
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The interval at which the site monitoring task is executed. Unit: minutes. Valid values: 1, 5, 15, 30, and 60.
     *
     * @var siteMonitors
     */
    public $siteMonitors;

    /**
     * @description The protocol that is used by the site monitoring task. Valid values: HTTP, HTTPS, PING, TCP, UDP, DNS, SMTP, POP3, and FTP.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'metricRules'  => 'MetricRules',
        'requestId'    => 'RequestId',
        'siteMonitors' => 'SiteMonitors',
        'success'      => 'Success',
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
        if (null !== $this->metricRules) {
            $res['MetricRules'] = null !== $this->metricRules ? $this->metricRules->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteMonitors) {
            $res['SiteMonitors'] = null !== $this->siteMonitors ? $this->siteMonitors->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorAttributeResponseBody
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
        if (isset($map['MetricRules'])) {
            $model->metricRules = metricRules::fromMap($map['MetricRules']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteMonitors'])) {
            $model->siteMonitors = siteMonitors::fromMap($map['SiteMonitors']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
