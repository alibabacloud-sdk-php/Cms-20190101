<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\instances;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\taskOption;
use AlibabaCloud\Tea\Model;

class nodeTaskConfig extends Model
{
    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $taskScope;

    /**
     * @var int
     */
    public $id;

    /**
     * @var instances
     */
    public $instances;

    /**
     * @var taskOption
     */
    public $taskOption;

    /**
     * @var alertConfig
     */
    public $alertConfig;
    protected $_name = [
        'taskType'    => 'TaskType',
        'groupName'   => 'GroupName',
        'groupId'     => 'GroupId',
        'taskName'    => 'TaskName',
        'disabled'    => 'Disabled',
        'taskScope'   => 'TaskScope',
        'id'          => 'Id',
        'instances'   => 'Instances',
        'taskOption'  => 'TaskOption',
        'alertConfig' => 'AlertConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->taskScope) {
            $res['TaskScope'] = $this->taskScope;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->taskOption) {
            $res['TaskOption'] = null !== $this->taskOption ? $this->taskOption->toMap() : null;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTaskConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['TaskScope'])) {
            $model->taskScope = $map['TaskScope'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['TaskOption'])) {
            $model->taskOption = taskOption::fromMap($map['TaskOption']);
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }

        return $model;
    }
}
