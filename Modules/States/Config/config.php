<?php

return [
	'name' => 'States',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-map',
	],
	'th' => ['name','country','region'],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
			['data'=>'country_id','name'=>'country_id'],
			['data'=>'region_id','name'=>'region_id'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'States\Forms\StatesForm',
	'permissions'=>[
		'states' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
			'getRegionState',
		],
	]
];
