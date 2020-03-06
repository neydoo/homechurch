<?php

return [
	'name' => 'Announcements',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-bullhorn',
	],
	'th' => ['title','start_date','end_date','body','status'],
	'columns'=>[
			['data'=>'title','name'=>'title'],
			['data'=>'start_date','name'=>'start_date'],
			['data'=>'end_date','name'=>'end_date'],
			['data'=>'body','name'=>'body'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Announcements\Forms\AnnouncementsForm',
	'permissions'=>[
		'announcements' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
