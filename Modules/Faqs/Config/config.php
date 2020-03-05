<?php

return [
	'name' => 'Faqs',
	'order' => [
		'id' => 'asc',
	],
	'sidebar' => [
		'weight' => 2,
		'icon' => 'fa fa-question-circle',
	],
	'th' => ['question','status'],
	'columns'=>[
            ['data'=>'question','name'=>'question'],
            ['data'=>'status','name'=>'status'],
            ['data'=>'action','name'=>'action'],
     ],
	'form'=>'Faqs\Forms\FaqsForm',
	'permissions'=>[
		'faqs' => [
			'index',
			'create',
			'store',
			'edit',
			'update',
			'destroy',
		],
	]
];
