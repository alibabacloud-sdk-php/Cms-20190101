<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogCountResponseBody\alertLogCount;
use AlibabaCloud\Tea\Model;

class DescribeAlertLogCountResponseBody extends Model
{
    /**
     * @var alertLogCount[]
     */
    public $alertLogCount;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'alertLogCount' => 'AlertLogCount',
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLogCount) {
            $res['AlertLogCount'] = [];
            if (null !== $this->alertLogCount && \is_array($this->alertLogCount)) {
                $n = 0;
                foreach ($this->alertLogCount as $item) {
                    $res['AlertLogCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return DescribeAlertLogCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLogCount'])) {
            if (!empty($map['AlertLogCount'])) {
                $model->alertLogCount = [];
                $n                    = 0;
                foreach ($map['AlertLogCount'] as $item) {
                    $model->alertLogCount[$n++] = null !== $item ? alertLogCount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
