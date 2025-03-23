<?php
declare (strict_types = 1);

namespace app\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名' =>  ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        "name|用户名" => "require|max:20|checkName:段金成",
        "email|邮箱" => "email"
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名' =>  '错误信息'
     *
     * @var array
     */
    protected $message = [
        "name.require" => "姓名不可用为空"
    ];

    protected function checkName($value, $rule, $data)
    {
        if ($value === $rule) {
            return "用户名是违禁词";
        } else {
            return true;
        }
    }

    // 场景验证
    protected $scene = [
        "insert" => ["name", "email"],
        "update" => ["email"],
    ];
}
