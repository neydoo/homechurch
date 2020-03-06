<?php

return [
	'name' => 'Countries',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-flag',
	],
	'th' => ['code','name'],
	'columns'=>[
            ['data'=>'code','name'=>'code'],
            ['data'=>'name','name'=>'name'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Countries\Forms\CountriesForm',
	'permissions'=>[
		'countries' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
