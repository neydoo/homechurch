<?php

return [
	'name' => 'Partners',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-handshake',
	],
	'th' => ['company','email','status'],
	'columns'=>[
		['data'=>'company','name'=>'company'],
		['data'=>'email','name'=>'email'],
		['data'=>'status','name'=>'status'],
		['data'=>'action','name'=>'action'],
     ],
	'form'=>'Partners\Forms\PartnersForm',
	'permissions'=>[
		'partners' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
