<?php

return [
	'name' => 'Newsletters',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-file',
	],
	'th' => ['subject','status'],
	'columns'=>[
            ['data'=>'subject','name'=>'subject'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Newsletters\Forms\NewslettersForm',
	'permissions'=>[
		'newsletters' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
