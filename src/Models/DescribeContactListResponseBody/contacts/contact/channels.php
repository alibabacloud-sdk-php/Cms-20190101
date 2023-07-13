<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact;

use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @description The alert notification method. Valid values:
     *
     *   Mail: emails
     *   DingWebHook: DingTalk chatbots
     *
     * @example Alice
     *
     * @var string
     */
    public $aliIM;

    /**
     * @description The timestamp when the alert contact was updated.
     *
     * Unit: milliseconds.
     * @example https://oapi.dingtalk.com/robot/send?access_token=9bf44f8189597d07dfdd7a123455ffc112****
     *
     * @var string
     */
    public $dingWebHook;

    /**
     * @description The alert contact groups.
     *
     * @example Alice@example.com
     *
     * @var string
     */
    public $mail;

    /**
     * @description The ID of the request.
     *
     * @example 1333333****
     *
     * @var string
     */
    public $SMS;
    protected $_name = [
        'aliIM'       => 'AliIM',
        'dingWebHook' => 'DingWebHook',
        'mail'        => 'Mail',
        'SMS'         => 'SMS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliIM) {
            $res['AliIM'] = $this->aliIM;
        }
        if (null !== $this->dingWebHook) {
            $res['DingWebHook'] = $this->dingWebHook;
        }
        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }
        if (null !== $this->SMS) {
            $res['SMS'] = $this->SMS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliIM'])) {
            $model->aliIM = $map['AliIM'];
        }
        if (isset($map['DingWebHook'])) {
            $model->dingWebHook = $map['DingWebHook'];
        }
        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }
        if (isset($map['SMS'])) {
            $model->SMS = $map['SMS'];
        }

        return $model;
    }
}
