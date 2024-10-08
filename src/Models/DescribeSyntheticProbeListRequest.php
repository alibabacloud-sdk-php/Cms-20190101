<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSyntheticProbeListRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @example false
     *
     * @var bool
     */
    public $idcProbe;

    /**
     * @example false
     *
     * @var bool
     */
    public $ipv4;

    /**
     * @example false
     *
     * @var bool
     */
    public $ipv6;

    /**
     * @var string
     */
    public $isp;

    /**
     * @example false
     *
     * @var bool
     */
    public $lmProbe;

    /**
     * @example false
     *
     * @var bool
     */
    public $mbProbe;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $viewAll;
    protected $_name = [
        'city'     => 'City',
        'idcProbe' => 'IdcProbe',
        'ipv4'     => 'Ipv4',
        'ipv6'     => 'Ipv6',
        'isp'      => 'Isp',
        'lmProbe'  => 'LmProbe',
        'mbProbe'  => 'MbProbe',
        'regionId' => 'RegionId',
        'viewAll'  => 'ViewAll',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->idcProbe) {
            $res['IdcProbe'] = $this->idcProbe;
        }
        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }
        if (null !== $this->ipv6) {
            $res['Ipv6'] = $this->ipv6;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->lmProbe) {
            $res['LmProbe'] = $this->lmProbe;
        }
        if (null !== $this->mbProbe) {
            $res['MbProbe'] = $this->mbProbe;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->viewAll) {
            $res['ViewAll'] = $this->viewAll;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyntheticProbeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['IdcProbe'])) {
            $model->idcProbe = $map['IdcProbe'];
        }
        if (isset($map['Ipv4'])) {
            $model->ipv4 = $map['Ipv4'];
        }
        if (isset($map['Ipv6'])) {
            $model->ipv6 = $map['Ipv6'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['LmProbe'])) {
            $model->lmProbe = $map['LmProbe'];
        }
        if (isset($map['MbProbe'])) {
            $model->mbProbe = $map['MbProbe'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ViewAll'])) {
            $model->viewAll = $map['ViewAll'];
        }

        return $model;
    }
}
