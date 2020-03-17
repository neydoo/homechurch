<?php return array (
  'providers' => 
  array (
    0 => 'Modules\\Core\\Providers\\CoreServiceProvider',
    1 => 'Collective\\Html\\HtmlServiceProvider',
    2 => 'Kris\\LaravelFormBuilder\\FormBuilderServiceProvider',
    3 => 'Yajra\\Datatables\\DatatablesServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Modules\\Core\\Providers\\CoreServiceProvider',
    1 => 'Kris\\LaravelFormBuilder\\FormBuilderServiceProvider',
    2 => 'Yajra\\Datatables\\DatatablesServiceProvider',
  ),
  'deferred' => 
  array (
    'html' => 'Collective\\Html\\HtmlServiceProvider',
    'form' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\HtmlBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\FormBuilder' => 'Collective\\Html\\HtmlServiceProvider',
  ),
  'when' => 
  array (
    'Collective\\Html\\HtmlServiceProvider' => 
    array (
    ),
  ),
);