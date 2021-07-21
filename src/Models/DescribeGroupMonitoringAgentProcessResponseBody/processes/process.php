<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\matchExpress;
use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @var alertConfig
     */
    public $alertConfig;
    protected $_name = [
        'processName'                => 'ProcessName',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'groupId'                    => 'GroupId',
        'id'                         => 'Id',
        'matchExpress'               => 'MatchExpress',
        'alertConfig'                => 'AlertConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toMap() : null;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }

        return $model;
    }
}
