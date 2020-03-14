<?php

return [
	'name' => 'Groupchats',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['name','description','status'],
	'columns'=>[
			['data'=>'name','name'=>'name'],
			['data'=>'description','name'=>'description'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Groupchats\Forms\GroupchatsForm',
	'permissions'=>[
		'groupchats' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
