<?php

return [
	'name' => 'Cities',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-map',
	],
	'th' => ['name'],
	'columns'=>[
            ['data'=>'name','name'=>'name'],
            // ['data'=>'state','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Cities\Forms\CitiesForm',
	'permissions'=>[
		'cities' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
