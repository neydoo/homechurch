<?php

return [
	'name' => 'Zones',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['name','code','country','region','state','district'],
	'columns'=>[
		['data'=>'name','name'=>'name'],
		['data'=>'code','name'=>'code'],
		['data'=>'country_id','name'=>'country_id'],
		['data'=>'region_id','name'=>'region_id'],
		['data'=>'state_id','name'=>'state_id'],
		['data'=>'district_id','name'=>'district_id'],
		['data'=>'action','name'=>'action'],
	],
	'hth' => ['name','code'],
	'second_columns'=>[
		['data'=>'name','name'=>'name'],
		['data'=>'code','name'=>'code'],
		['data'=>'action','name'=>'action'],
	],
	'form'=>'Zones\Forms\ZonesForm',
	'permissions'=>[
		'zones' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
			'search',
			'getDistrictZone',
		],
	]
];
