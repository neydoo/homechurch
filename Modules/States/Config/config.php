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
	'th' => ['code','name','country','region'],
	'columns'=>[
		['data'=>'code','name'=>'code'],
		['data'=>'name','name'=>'name'],
		['data'=>'country_id','name'=>'country_id'],
		['data'=>'region_id','name'=>'region_id'],
		['data'=>'action','name'=>'action'],
	],
	'hth' => ['name','code'],
	'second_columns'=>[
		['data'=>'name','name'=>'name'],
		['data'=>'code','name'=>'code'],
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
			'search',
			'getRegionState',
		],
	]
];
