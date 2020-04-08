<?php

return [
	'name' => 'Regions',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 1,
		'icon' => 'fa fa-file',
	],
	'th' => ['code','name','country'],
	'columns'=>[
		['data'=>'code','name'=>'code'],
		['data'=>'name','name'=>'name'],
		['data'=>'country_id','name'=>'country_id'],
		['data'=>'action','name'=>'action'],
	],
	'hth' => ['name','code'],
	'second_columns'=>[
		['data'=>'name','name'=>'name'],
		['data'=>'code','name'=>'code'],
		['data'=>'action','name'=>'action'],
	],
	'form'=>'Regions\Forms\RegionsForm',
	'permissions'=>[
		'regions' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
			'getCountryRegion',
			'search'
		],
	]
];
