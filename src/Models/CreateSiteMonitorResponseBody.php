<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\createResultList;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateSiteMonitorResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $code;

    /**
     * @var createResultList
     */
    public $createResultList;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'data'             => 'Data',
        'code'             => 'Code',
        'createResultList' => 'CreateResultList',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createResultList) {
            $res['CreateResultList'] = null !== $this->createResultList ? $this->createResultList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateResultList'])) {
            $model->createResultList = createResultList::fromMap($map['CreateResultList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
