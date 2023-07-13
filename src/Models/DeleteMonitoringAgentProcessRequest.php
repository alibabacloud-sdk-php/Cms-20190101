<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMonitoringAgentProcessRequest extends Model
{
    /**
     * @description The ID of the process.
     *
     * >  You must specify either the `ProcessId` or the `ProcessName` parameter.
     * @example i-KpVny6l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 123****
     *
     * @var string
     */
    public $processId;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example http
     *
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'processId'   => 'ProcessId',
        'processName' => 'ProcessName',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMonitoringAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
