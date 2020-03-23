<?php

return [
	'name' => 'Regions',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['code','name','country'],
	'columns'=>[
			['data'=>'code','name'=>'code'],
			['data'=>'name','name'=>'name'],
			['data'=>'country_id','name'=>'country_id'],
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
			'getCountryRegion'
		],
	]
];
