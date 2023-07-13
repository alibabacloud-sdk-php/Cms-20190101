<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource\region;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource\tags;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource\vpc;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The network type.
     *
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The total number of returned pages.
     *
     * @example desc_test
     *
     * @var string
     */
    public $desc;

    /**
     * @description The tag value.
     *
     * @example {"instanceId":"i-m5e0k0bexac8tykr****"}
     *
     * @var string
     */
    public $dimension;

    /**
     * @description Specifies whether to return the total number of resources in the specified application group. Valid values:
     *
     *   true (default value)
     *   false
     *
     * @example i-m5e0k0bexac8tykr****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The resources that are associated with the application group.
     *
     * @example hostName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The page number of the returned page.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @var region
     */
    public $region;

    /**
     * @description The tags of the resource.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the request.
     *
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'category'     => 'Category',
        'desc'         => 'Desc',
        'dimension'    => 'Dimension',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'networkType'  => 'NetworkType',
        'region'       => 'Region',
        'tags'         => 'Tags',
        'vpc'          => 'Vpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->region) {
            $res['Region'] = null !== $this->region ? $this->region->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = null !== $this->vpc ? $this->vpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Region'])) {
            $model->region = region::fromMap($map['Region']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Vpc'])) {
            $model->vpc = vpc::fromMap($map['Vpc']);
        }

        return $model;
    }
}
