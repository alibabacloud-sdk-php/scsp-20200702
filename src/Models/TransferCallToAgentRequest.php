<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class TransferCallToAgentRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $targetAccountName;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $holdConnectionId;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $isSingleTransfer;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'instanceId'        => 'InstanceId',
        'accountName'       => 'AccountName',
        'targetAccountName' => 'TargetAccountName',
        'callId'            => 'CallId',
        'jobId'             => 'JobId',
        'connectionId'      => 'ConnectionId',
        'holdConnectionId'  => 'HoldConnectionId',
        'type'              => 'Type',
        'isSingleTransfer'  => 'IsSingleTransfer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->targetAccountName) {
            $res['TargetAccountName'] = $this->targetAccountName;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->holdConnectionId) {
            $res['HoldConnectionId'] = $this->holdConnectionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isSingleTransfer) {
            $res['IsSingleTransfer'] = $this->isSingleTransfer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferCallToAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['TargetAccountName'])) {
            $model->targetAccountName = $map['TargetAccountName'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['HoldConnectionId'])) {
            $model->holdConnectionId = $map['HoldConnectionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsSingleTransfer'])) {
            $model->isSingleTransfer = $map['IsSingleTransfer'];
        }

        return $model;
    }
}
