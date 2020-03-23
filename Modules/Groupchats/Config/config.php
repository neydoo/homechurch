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
	'th' => ['name','code','description','status'],
	'columns'=>[
			['data'=>'name','name'=>'name'],
			['data'=>'code','name'=>'code'],
			['data'=>'description','name'=>'description'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
	 ],
	 
	'hth' => ['name','code'],
	'second_columns'=>[
		['data'=>'name','name'=>'name'],
		['data'=>'code','name'=>'code'],
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
