<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateControlPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateControlPolicyRequest extends Model
{
    /**
     * @description The description of the access control policy.
     *
     * The description must be 1 to 1,024 characters in length. The description can contain letters, digits, underscores (_), and hyphens (-) and must start with a letter.
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $description;

    /**
     * @description The effective scope of the access control policy.
     *
     * This parameter is required.
     * @example RAM
     *
     * @var string
     */
    public $effectScope;

    /**
     * @description The document of the access control policy.
     *
     * This parameter is required.
     * @example {"Version":"1","Statement":[{"Effect":"Deny","Action":["ram:UpdateRole","ram:DeleteRole","ram:AttachPolicyToRole","ram:DetachPolicyFromRole"],"Resource":"acs:ram:*:*:role/ResourceDirectoryAccountAccessRole"}]}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The name of the access control policy.
     *
     * This parameter is required.
     * @example ExampleControlPolicy
     *
     * @var string
     */
    public $policyName;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'description'    => 'Description',
        'effectScope'    => 'EffectScope',
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectScope) {
            $res['EffectScope'] = $this->effectScope;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectScope'])) {
            $model->effectScope = $map['EffectScope'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
