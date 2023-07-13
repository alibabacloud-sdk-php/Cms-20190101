<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertLogHistogramRequest extends Model
{
    /**
     * @description The name of the metric.
     *
     * >  For more information about the metrics of different cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroup;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 1609989009694
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The error message.
     *
     * @example product
     *
     * @var string
     */
    public $groupBy;

    /**
     * @description The namespace of the cloud service.
     *
     * >  For more information about the namespaces of cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The HTTP status code.
     *
     * >  The HTTP status code 200 indicates a success.
     * @example 360
     *
     * @var string
     */
    public $lastMin;

    /**
     * @description The alert group.
     *
     * @example P4
     *
     * @var string
     */
    public $level;

    /**
     * @description The dimension based on which data is aggregated. This parameter is similar to the Group By clause of SQL statements. Valid values:
     *
     *   `product`: aggregates data by cloud service.
     *   `level`: aggregates data by alert level.
     *   `groupId`: aggregates data by application group.
     *   `contactGroup`: aggregates data by alert group.
     *   `product,metricName`: aggregates data both by cloud service and by metric.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The status of the alert. Valid values:
     *
     *   0: The alert is triggered or cleared.
     *   1: The alert is generated not during the effective period.
     *   2: The alert is muted and not triggered in a specified period.
     *   3: The host is restarting.
     *   4: Notifications are not sent for the alert.
     *
     * When the value of the SendStatus parameter is 0, the value P4 of the Level parameter indicates a triggered alert and the value OK indicates a cleared alert.
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The keyword based on which the alert logs to be queried are searched.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the application group.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The level and notification method of the alert. Valid values:
     *
     *   P4: Alert notifications are sent by using emails and DingTalk chatbots.
     *   OK: No alert is generated.
     *
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The statistical period of alert logs. Unit: minutes.
     *
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The abbreviation of the service name.
     *
     * @example alert
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The name of the alert rule.
     *
     * @example 0
     *
     * @var string
     */
    public $sendStatus;

    /**
     * @description The number of the page to return. Default value: 1
     *
     * @example 1609988009694
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'contactGroup' => 'ContactGroup',
        'endTime'      => 'EndTime',
        'groupBy'      => 'GroupBy',
        'groupId'      => 'GroupId',
        'lastMin'      => 'LastMin',
        'level'        => 'Level',
        'metricName'   => 'MetricName',
        'namespace'    => 'Namespace',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'product'      => 'Product',
        'regionId'     => 'RegionId',
        'ruleName'     => 'RuleName',
        'searchKey'    => 'SearchKey',
        'sendStatus'   => 'SendStatus',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroup) {
            $res['ContactGroup'] = $this->contactGroup;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lastMin) {
            $res['LastMin'] = $this->lastMin;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertLogHistogramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroup'])) {
            $model->contactGroup = $map['ContactGroup'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LastMin'])) {
            $model->lastMin = $map['LastMin'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
