<?php

return [
	'name' => 'District',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['name','country','region','state'],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
			['data'=>'country_id','name'=>'country_id'],
			['data'=>'region_id','name'=>'region_id'],
			['data'=>'state_id','name'=>'state_id'],
            ['data'=>'action','name'=>'action'],
    ],
	'form'=>'District\Forms\DistrictForm',
	'permissions'=>[
		'district' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
