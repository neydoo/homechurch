<?php

return [
	'name' => 'Offering',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-money',
	],
	'th' => ['Home Cell','amount', "date","week"],
	'columns'=>[
            ['data'=>'homechurch_id','name'=>'homechurch_id'],
            ['data'=>'amount','name'=>'amount'],
			['data'=>'date','name'=>'date'],
			['data'=>'week','name'=>'week'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Offering\Forms\OfferingForm',
	'permissions'=>[
		'offering' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'print',
			// 'destroy',
		],
	]
];
