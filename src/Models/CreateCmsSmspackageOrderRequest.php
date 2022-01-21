<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateCmsSmspackageOrderRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $smsCount;
    protected $_name = [
        'autoPay'         => 'AutoPay',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'autoUseCoupon'   => 'AutoUseCoupon',
        'period'          => 'Period',
        'periodUnit'      => 'PeriodUnit',
        'smsCount'        => 'SmsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->smsCount) {
            $res['SmsCount'] = $this->smsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCmsSmspackageOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['SmsCount'])) {
            $model->smsCount = $map['SmsCount'];
        }

        return $model;
    }
}
