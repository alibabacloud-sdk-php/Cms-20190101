<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;
use AlibabaCloud\Tea\Model;

class DescribeAlertLogListResponseBody extends Model
{
    /**
     * @description The status code of the alert callback.
     *
     * @var alertLogList[]
     */
    public $alertLogList;

    /**
     * @description The extended fields.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The end timestamp of the alert logs to be queried. Unit: milliseconds.
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The DingTalk chatbots of alert contacts.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The name of the metric.
     *
     * >  For more information about the metrics of different cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the alert rule.
     *
     * @example 1C4A3709-BF52-42EE-87B5-7435F0929585
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp that was generated when the alert was triggered. Unit: milliseconds.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'alertLogList' => 'AlertLogList',
        'code'         => 'Code',
        'message'      => 'Message',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLogList) {
            $res['AlertLogList'] = [];
            if (null !== $this->alertLogList && \is_array($this->alertLogList)) {
                $n = 0;
                foreach ($this->alertLogList as $item) {
                    $res['AlertLogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertLogListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLogList'])) {
            if (!empty($map['AlertLogList'])) {
                $model->alertLogList = [];
                $n                   = 0;
                foreach ($map['AlertLogList'] as $item) {
                    $model->alertLogList[$n++] = null !== $item ? alertLogList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
