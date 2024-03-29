<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class fcParameters extends Model
{
    /**
     * @description The name of the function. Valid values of N: 1 to 5.
     *
     * @example fc-test
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The ID of the recipient that receives alert notifications. Valid values of N: 1 to 5.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The region where Function Compute is deployed. Valid values of N: 1 to 5.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the Function Compute service. Valid values of N: 1 to 5.
     *
     * @example fc-test
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'functionName' => 'FunctionName',
        'id'           => 'Id',
        'region'       => 'Region',
        'serviceName'  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fcParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
