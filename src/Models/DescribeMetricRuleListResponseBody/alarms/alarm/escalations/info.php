<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $preCondition;

    /**
     * @var int
     */
    public $times;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'preCondition'       => 'PreCondition',
        'times'              => 'Times',
        'threshold'          => 'Threshold',
        'statistics'         => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->preCondition) {
            $res['PreCondition'] = $this->preCondition;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['PreCondition'])) {
            $model->preCondition = $map['PreCondition'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        return $model;
    }
}
