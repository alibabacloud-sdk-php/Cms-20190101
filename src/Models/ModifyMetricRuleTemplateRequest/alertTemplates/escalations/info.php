<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'threshold'          => 'Threshold',
        'statistics'         => 'Statistics',
        'comparisonOperator' => 'ComparisonOperator',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
