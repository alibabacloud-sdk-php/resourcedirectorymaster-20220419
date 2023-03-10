<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class SendVerificationCodeForEnableRDRequest extends Model
{
    /**
     * @example xx-13900001234
     *
     * @var string
     */
    public $secureMobilePhone;
    protected $_name = [
        'secureMobilePhone' => 'SecureMobilePhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secureMobilePhone) {
            $res['SecureMobilePhone'] = $this->secureMobilePhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendVerificationCodeForEnableRDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecureMobilePhone'])) {
            $model->secureMobilePhone = $map['SecureMobilePhone'];
        }

        return $model;
    }
}
