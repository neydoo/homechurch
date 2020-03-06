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
	'th' => ['title','status'],
	'columns'=>[
            ['data'=>'title','name'=>'title'],
            ['data'=>'status','name'=>'status'],
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
