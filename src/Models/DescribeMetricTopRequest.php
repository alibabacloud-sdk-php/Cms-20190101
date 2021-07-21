<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricTopRequest extends Model
{
    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $orderby;

    /**
     * @var string
     */
    public $orderDesc;

    /**
     * @var string
     */
    public $length;

    /**
     * @var string
     */
    public $express;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'period'     => 'Period',
        'namespace'  => 'Namespace',
        'metricName' => 'MetricName',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'dimensions' => 'Dimensions',
        'orderby'    => 'Orderby',
        'orderDesc'  => 'OrderDesc',
        'length'     => 'Length',
        'express'    => 'Express',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->orderby) {
            $res['Orderby'] = $this->orderby;
        }
        if (null !== $this->orderDesc) {
            $res['OrderDesc'] = $this->orderDesc;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Orderby'])) {
            $model->orderby = $map['Orderby'];
        }
        if (isset($map['OrderDesc'])) {
            $model->orderDesc = $map['OrderDesc'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
