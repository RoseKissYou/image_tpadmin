<?php

namespace app\admin\validate;

use think\Validate;

class Photo extends Validate
{
	protected $rule = [
			'cid'   => 'require',
			'title' => 'require',
	];
	
	protected $message =[
			'cid.require'   => '请选择所属栏目',
			'title.require' => '请输入标题',
			'sort.require'  => '请输入排序',
	];
	
}