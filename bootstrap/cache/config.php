<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:qjqoeWBinUuOGA/5hpAN/RMOdvj9hfv50uQjWROB60U=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\BroadcastServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'Maatwebsite\\Sidebar\\SidebarServiceProvider',
      28 => 'Modules\\Core\\Providers\\MyAppServiceProvider',
      29 => 'Netshell\\Paypal\\PaypalServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Paypal' => 'Netshell\\Paypal\\Facades\\Paypal',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\Users\\Entities\\Sentinel\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => 'c67df10ecc68614cffcb',
        'secret' => '22cda2244f0722fe9c3a',
        'app_id' => '963039',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cartalyst' => 
  array (
    'sentinel' => 
    array (
      'session' => 'cartalyst_sentinel',
      'cookie' => 'cartalyst_sentinel',
      'users' => 
      array (
        'model' => 'Modules\\Users\\Entities\\Sentinel\\User',
      ),
      'roles' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Roles\\EloquentRole',
      ),
      'permissions' => 
      array (
        'class' => 'Cartalyst\\Sentinel\\Permissions\\StandardPermissions',
      ),
      'persistences' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Persistences\\EloquentPersistence',
        'single' => false,
      ),
      'checkpoints' => 
      array (
        0 => 'throttle',
        1 => 'activation',
      ),
      'activations' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Activations\\EloquentActivation',
        'expires' => 259200,
        'lottery' => 
        array (
          0 => 2,
          1 => 100,
        ),
      ),
      'reminders' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Reminders\\EloquentReminder',
        'expires' => 14400,
        'lottery' => 
        array (
          0 => 2,
          1 => 100,
        ),
      ),
      'throttling' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Throttling\\EloquentThrottle',
        'global' => 
        array (
          'interval' => 900,
          'thresholds' => 
          array (
            10 => 1,
            20 => 2,
            30 => 4,
            40 => 8,
            50 => 16,
            60 => 12,
          ),
        ),
        'ip' => 
        array (
          'interval' => 900,
          'thresholds' => 5,
        ),
        'user' => 
        array (
          'interval' => 900,
          'thresholds' => 5,
        ),
      ),
    ),
  ),
  'croppa' => 
  array (
    'src_dir' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/public/uploads',
    'crops_dir' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/public/uploads',
    'max_crops' => false,
    'path' => 'uploads/(.*)$',
    'ignore' => '\\.(gif|GIF)$',
    'signing_key' => 'app.key',
    'memory_limit' => '128M',
    'jpeg_quality' => 95,
    'interlace' => true,
    'upscale' => false,
    'filters' => 
    array (
      'gray' => 'Bkwld\\Croppa\\Filters\\BlackWhite',
      'darkgray' => 'Bkwld\\Croppa\\Filters\\Darkgray',
      'blur' => 'Bkwld\\Croppa\\Filters\\Blur',
      'negative' => 'Bkwld\\Croppa\\Filters\\Negative',
      'orange' => 'Bkwld\\Croppa\\Filters\\OrangeWarhol',
      'turquoise' => 'Bkwld\\Croppa\\Filters\\TurquoiseWarhol',
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'homechurch',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'homechurch',
        'username' => 'root',
        'password' => 'password',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'homechurch',
        'username' => 'root',
        'password' => 'password',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'homechurch',
        'username' => 'root',
        'password' => 'password',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
    ),
    'index_column' => 'DT_Row_Index',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => '%s %s NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
  ),
  'laravel-form-builder' => 
  array (
    'defaults' => 
    array (
      'wrapper_class' => 'form-group',
      'wrapper_error_class' => 'has-error',
      'label_class' => 'control-label',
      'field_class' => 'form-control',
      'help_block_class' => 'help-block',
      'error_class' => 'text-danger',
      'required_class' => 'required',
    ),
    'form' => 'laravel-form-builder::form',
    'text' => 'laravel-form-builder::text',
    'textarea' => 'laravel-form-builder::textarea',
    'button' => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio' => 'laravel-form-builder::radio',
    'checkbox' => 'laravel-form-builder::checkbox',
    'select' => 'laravel-form-builder::select',
    'choice' => 'laravel-form-builder::choice',
    'repeated' => 'laravel-form-builder::repeated',
    'child_form' => 'laravel-form-builder::child_form',
    'collection' => 'laravel-form-builder::collection',
    'static' => 'laravel-form-builder::static',
    'template_prefix' => '',
    'default_namespace' => 'Modules',
    'custom_fields' => 
    array (
    ),
  ),
  'lfm' => 
  array (
    'use_package_routes' => true,
    'middlewares' => 
    array (
      0 => 'web',
      1 => 'auth.admin',
    ),
    'url_prefix' => 'filemanager',
    'allow_multi_user' => true,
    'allow_share_folder' => true,
    'user_field' => 'App\\Hanlers\\ConfigHandler',
    'base_directory' => 'public',
    'images_folder_name' => 'photos',
    'files_folder_name' => 'files',
    'shared_folder_name' => 'shares',
    'thumb_folder_name' => 'thumbs',
    'images_startup_view' => 'grid',
    'files_startup_view' => 'list',
    'rename_file' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'max_image_size' => 50000,
    'max_file_size' => 50000,
    'should_validate_mime' => false,
    'valid_image_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
      3 => 'image/gif',
      4 => 'image/svg+xml',
    ),
    'should_create_thumbnails' => true,
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'create_folder_mode' => 493,
    'create_file_mode' => 420,
    'should_change_file_mode' => true,
    'valid_file_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
      3 => 'image/gif',
      4 => 'image/svg+xml',
      5 => 'application/pdf',
      6 => 'text/plain',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'file_icon_array' => 
    array (
      'pdf' => 'fa-file-pdf-o',
      'doc' => 'fa-file-word-o',
      'docx' => 'fa-file-word-o',
      'xls' => 'fa-file-excel-o',
      'xlsx' => 'fa-file-excel-o',
      'zip' => 'fa-file-archive-o',
      'gif' => 'fa-file-image-o',
      'jpg' => 'fa-file-image-o',
      'jpeg' => 'fa-file-image-o',
      'png' => 'fa-file-image-o',
      'ppt' => 'fa-file-powerpoint-o',
      'pptx' => 'fa-file-powerpoint-o',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'from' => 
    array (
      'address' => 'info@helpgeta.com',
      'name' => 'Help Geta',
    ),
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/resources/views/vendor/mail',
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => true,
      'path' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/Modules/Core/Console/Commands/stubs',
      'files' => 
      array (
        'start' => 'start.php',
        'routes/api' => 'Routes/api.php',
        'routes/web' => 'Routes/web.php',
        'routes/front-web' => 'Routes/front-web.php',
        'custom/sidebar' => 'Sidebar/SidebarExtender.php',
        'views/index' => 'Resources/views/admin/index.blade.php',
        'views/form' => 'Resources/views/admin/_form.blade.php',
        'views/table-action' => 'Resources/views/admin/_table-action.blade.php',
        'custom/lang' => 'Resources/lang/en/global.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
      ),
      'replacements' => 
      array (
        'start' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'ROUTES_LOCATION',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'SINGULAR_LOWER_NAME',
          4 => 'SINGULAR_STUDLY_NAME',
        ),
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'SINGULAR_LOWER_NAME',
          4 => 'SINGULAR_STUDLY_NAME',
        ),
        'routes/front-web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'SINGULAR_LOWER_NAME',
          4 => 'SINGULAR_STUDLY_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/form' => 
        array (
          0 => 'STUDLY_NAME',
          1 => 'LOWER_NAME',
        ),
        'views/table-action' => 
        array (
          0 => 'STUDLY_NAME',
          1 => 'LOWER_NAME',
        ),
        'custom/lang' => 
        array (
          0 => 'STUDLY_NAME',
          1 => 'LOWER_NAME',
          2 => 'SINGULAR_LOWER_NAME',
          3 => 'SINGULAR_STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
          1 => 'LOWER_NAME',
        ),
        'custom/sidebar' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/Modules',
      'assets' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/public/modules',
      'migration' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => false,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'facade' => 
        array (
          'path' => 'Facades',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'presenter' => 
        array (
          'path' => 'Presenters',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => true,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'adedotun',
      'author' => 
      array (
        'name' => 'Adedotun Bashorun',
        'email' => 'adedotunolawale@gmail.com',
      ),
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
  ),
  'myapp' => 
  array (
    'mail_from_address' => 'support@pennylender.com',
    'mail_from_name' => 'Pennylender',
    'mail_host' => 'admin@pennylender.com',
    'mail_password' => '4876acc525f2d386a695ea3d29191f0a-e89319ab-a6f253c3',
    'mail_username' => 'postmaster@mail.pennylender.com',
    'mail_port' => '587',
    'mail_driver' => 'log',
    'mail_encryption' => 'tls',
    'paypal_client_id' => NULL,
    'paypal_client_secret' => NULL,
    'stripe_secret' => NULL,
    'stripe_publish_key' => NULL,
    'contact_email' => 'adedotunolawale@gmail.com',
    'phone' => '+2349034268873',
    'office_hours' => NULL,
    'address' => 'Lagos State',
    'facebook' => NULL,
    'facebook_plugin' => NULL,
    'twitter' => NULL,
    'twitter_plugin' => NULL,
    'instagram' => NULL,
    'instagram_plugin' => NULL,
    'linkedin' => NULL,
    'linkedin_plugin' => NULL,
    'test_email' => NULL,
    'mailgun_domain' => NULL,
    'mailgun_secret' => NULL,
    'website_title' => 'Home Church',
    'app_name' => 'HomeChurch',
    'webmaster_email' => NULL,
    'welcome_message' => 'Welcome To Dunamis Home Church',
    'google_analytics' => NULL,
    'tawk_plugin' => NULL,
    'map' => NULL,
    'website_description' => NULL,
    'website_keywords' => NULL,
    'newsletter_msg' => NULL,
    'footer_about_msg' => NULL,
    'image' => 'logo.jpg',
    'mail_drivers' => 
    array (
      'mail' => 'Mail',
      'mailgun' => 'Mail Gun',
      'smtp' => 'SMTP',
    ),
    'admin_prefix' => 'admin',
    'public_prefix' => 'account',
    'homechurch' => 
    array (
      'per_page' => 10,
    ),
    'events' => 
    array (
      'per_page' => 20,
    ),
    'testimonials' => 
    array (
      'per_page' => 20,
    ),
    'announcements' => 
    array (
      'per_page' => 20,
    ),
    'groupchats' => 
    array (
      'per_page' => 20,
    ),
    'manuals' => 
    array (
      'per_page' => 20,
    ),
    'linkable_to_page' => 
    array (
      0 => 'testimonials',
      1 => 'announcements',
      2 => 'manuals',
      3 => 'faqs',
      4 => 'groupchats',
      5 => 'manuals',
    ),
    'middleware' => 
    array (
      'backend' => 
      array (
        0 => 'auth.admin',
        1 => 'permissions',
      ),
      'account' => 
      array (
        0 => 'auth.account',
      ),
      'api' => 
      array (
        0 => 'web',
      ),
    ),
    'paypal' => 
    array (
      'mode' => 'sandbox',
      'endpoint' => 'https://api.sandbox.paypal.com',
      'connection' => 30,
      'log_enabled' => true,
      'log_storage_path' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/logs/paypal.log',
      'log_level' => 'FINE',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => 'sk_test_dD9lZ8JxUsCWiogQHJov1b0U',
    ),
    'twilio' => 
    array (
      'sid' => NULL,
      'token' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/resources/views',
    ),
    'compiled' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/framework/views',
  ),
  'ziggy' => 
  array (
    'blacklist' => 
    array (
      0 => 'admin.*',
      1 => 'debugbar.*',
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/Users/adedotunbashorun/Documents/personal/homechurch-V2.0/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'sidebar' => 
  array (
    'cache' => 
    array (
      'method' => NULL,
      'duration' => 1440,
    ),
  ),
  'captcha' => 
  array (
    'secret' => NULL,
    'sitekey' => NULL,
    'options' => 
    array (
      'timeout' => 30,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'users' => 
  array (
    'name' => 'Users',
    'driver' => 'Sentinel',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
    ),
    'th' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'email',
      3 => 'created_at',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'first_name',
        'name' => 'first_name',
      ),
      1 => 
      array (
        'data' => 'last_name',
        'name' => 'last_name',
      ),
      2 => 
      array (
        'data' => 'email',
        'name' => 'email',
      ),
      3 => 
      array (
        'data' => 'created_at',
        'name' => 'created_at',
      ),
      4 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Users\\Forms\\UsersForm',
    'roles' => 
    array (
      'th' => 
      array (
        0 => 'name',
        1 => 'slug',
      ),
      'form' => 'Users\\Forms\\RolesForm',
    ),
    'permissions' => 
    array (
      'users' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
      'users.roles' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
    'redirect_route_after_login' => 'homepage',
    'login-columns' => 
    array (
      0 => 'email',
      1 => 'username',
    ),
    'allow_user_registration' => true,
    'fillable' => 
    array (
      0 => 'email',
      1 => 'password',
      2 => 'permissions',
      3 => 'first_name',
      4 => 'last_name',
      5 => 'phone',
      6 => 'address',
      7 => 'avatar',
      8 => 'username',
      9 => 'state_id',
      10 => 'city_id',
      11 => 'age',
      12 => 'gender',
    ),
  ),
  'banners' => 
  array (
    'name' => 'Banners',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file-image',
    ),
    'th' => 
    array (
      0 => 'caption',
      1 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'caption',
        'name' => 'caption',
      ),
      1 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Banners\\Forms\\BannersForm',
    'permissions' => 
    array (
      'banners' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'settings' => 
  array (
    'name' => 'Settings',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
    ),
    'form' => 'Settings\\Forms\\SettingsForm',
    'permissions' => 
    array (
      'settings' => 
      array (
        0 => 'index',
        1 => 'store',
      ),
    ),
  ),
  'core' => 
  array (
    'name' => 'Core',
  ),
  'photos' => 
  array (
    'name' => 'Photos',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'title',
      1 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'title',
        'name' => 'title',
      ),
      1 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Photos\\Forms\\PhotosForm',
    'permissions' => 
    array (
      'photos' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'menus' => 
  array (
    'name' => 'Menus',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'slug',
      2 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'slug',
        'name' => 'slug',
      ),
      2 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      3 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Menus\\Forms\\MenusForm',
    'link_form' => 'Menus\\Forms\\MenuLinksForm',
    'permissions' => 
    array (
      'menus' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
      'menus.menu_links' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'history' => 
  array (
    'name' => 'History',
    'order' => 
    array (
      'created_at' => 'desc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
    ),
    'form' => 'History\\Forms\\HistoryForm',
    'permissions' => 
    array (
      'history' => 
      array (
        0 => 'index',
      ),
    ),
  ),
  'announcements' => 
  array (
    'name' => 'Announcements',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-bullhorn',
    ),
    'th' => 
    array (
      0 => 'title',
      1 => 'start_date',
      2 => 'end_date',
      3 => 'body',
      4 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'title',
        'name' => 'title',
      ),
      1 => 
      array (
        'data' => 'start_date',
        'name' => 'start_date',
      ),
      2 => 
      array (
        'data' => 'end_date',
        'name' => 'end_date',
      ),
      3 => 
      array (
        'data' => 'body',
        'name' => 'body',
      ),
      4 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      5 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Announcements\\Forms\\AnnouncementsForm',
    'permissions' => 
    array (
      'announcements' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'manuals' => 
  array (
    'name' => 'Manuals',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'body',
      2 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'body',
        'name' => 'body',
      ),
      2 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      3 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Manuals\\Forms\\ManualsForm',
    'permissions' => 
    array (
      'manuals' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'states' => 
  array (
    'name' => 'States',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-map',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'country',
      2 => 'region',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
      ),
      2 => 
      array (
        'data' => 'region_id',
        'name' => 'region_id',
      ),
      3 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'States\\Forms\\StatesForm',
    'permissions' => 
    array (
      'states' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
        6 => 'getRegionState',
      ),
    ),
  ),
  'regions' => 
  array (
    'name' => 'Regions',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'country',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Regions\\Forms\\RegionsForm',
    'permissions' => 
    array (
      'regions' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
        6 => 'getCountryRegion',
      ),
    ),
  ),
  'offering' => 
  array (
    'name' => 'Offering',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-money',
    ),
    'th' => 
    array (
      0 => 'Home Cell',
      1 => 'amount',
      2 => 'date',
      3 => 'week',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'homechurch_id',
        'name' => 'homechurch_id',
      ),
      1 => 
      array (
        'data' => 'amount',
        'name' => 'amount',
      ),
      2 => 
      array (
        'data' => 'date',
        'name' => 'date',
      ),
      3 => 
      array (
        'data' => 'week',
        'name' => 'week',
      ),
      4 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Offering\\Forms\\OfferingForm',
    'permissions' => 
    array (
      'offering' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'print',
      ),
    ),
  ),
  'newsletters' => 
  array (
    'name' => 'Newsletters',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-hacker-news',
    ),
    'th' => 
    array (
      0 => 'subject',
      1 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'subject',
        'name' => 'subject',
      ),
      1 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Newsletters\\Forms\\NewslettersForm',
    'permissions' => 
    array (
      'newsletters' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'homechurches' => 
  array (
    'name' => 'Homechurches',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'country',
      2 => 'region',
      3 => 'state',
      4 => 'district',
      5 => 'zone',
      6 => 'area',
      7 => 'church',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
        'search' => false,
      ),
      2 => 
      array (
        'data' => 'region_id',
        'name' => 'region_id',
      ),
      3 => 
      array (
        'data' => 'state_id',
        'name' => 'state_id',
      ),
      4 => 
      array (
        'data' => 'district_id',
        'name' => 'district_id',
      ),
      5 => 
      array (
        'data' => 'zone_id',
        'name' => 'zone_id',
      ),
      6 => 
      array (
        'data' => 'area_id',
        'name' => 'area_id',
      ),
      7 => 
      array (
        'data' => 'church_id',
        'name' => 'church_id',
      ),
      8 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Homechurches\\Forms\\HomechurchesForm',
    'permissions' => 
    array (
      'homechurches' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'areas' => 
  array (
    'name' => 'Areas',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'code',
      2 => 'country',
      3 => 'region',
      4 => 'state',
      5 => 'district',
      6 => 'zone',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'code',
        'name' => 'code',
      ),
      2 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
      ),
      3 => 
      array (
        'data' => 'region_id',
        'name' => 'region_id',
      ),
      4 => 
      array (
        'data' => 'state_id',
        'name' => 'state_id',
      ),
      5 => 
      array (
        'data' => 'district_id',
        'name' => 'district_id',
      ),
      6 => 
      array (
        'data' => 'zone_id',
        'name' => 'zone_id',
      ),
      7 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Areas\\Forms\\AreasForm',
    'permissions' => 
    array (
      'areas' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'groupchats' => 
  array (
    'name' => 'Groupchats',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'description',
      2 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'description',
        'name' => 'description',
      ),
      2 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      3 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Groupchats\\Forms\\GroupchatsForm',
    'permissions' => 
    array (
      'groupchats' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'faqs' => 
  array (
    'name' => 'Faqs',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-question-circle',
    ),
    'th' => 
    array (
      0 => 'question',
      1 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'question',
        'name' => 'question',
      ),
      1 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Faqs\\Forms\\FaqsForm',
    'permissions' => 
    array (
      'faqs' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'districts' => 
  array (
    'name' => 'Districts',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'code',
      2 => 'country',
      3 => 'region',
      4 => 'state',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'code',
        'name' => 'code',
      ),
      2 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
      ),
      3 => 
      array (
        'data' => 'region_id',
        'name' => 'region_id',
      ),
      4 => 
      array (
        'data' => 'state_id',
        'name' => 'state_id',
      ),
      5 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Districts\\Forms\\DistrictsForm',
    'permissions' => 
    array (
      'districts' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'dashboard' => 
  array (
    'name' => 'Dashboard',
    'permissions' => 
    array (
      'dashboard' => 
      array (
        0 => 'index',
      ),
    ),
  ),
  'countries' => 
  array (
    'name' => 'Countries',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-flag',
    ),
    'th' => 
    array (
      0 => 'code',
      1 => 'name',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'code',
        'name' => 'code',
      ),
      1 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Countries\\Forms\\CountriesForm',
    'permissions' => 
    array (
      'countries' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'churches' => 
  array (
    'name' => 'Churches',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'code',
      2 => 'country',
      3 => 'region',
      4 => 'state',
      5 => 'district',
      6 => 'zone',
      7 => 'area',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'code',
        'name' => 'code',
      ),
      2 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
      ),
      3 => 
      array (
        'data' => 'region_id',
        'name' => 'region_id',
      ),
      4 => 
      array (
        'data' => 'state_id',
        'name' => 'state_id',
      ),
      5 => 
      array (
        'data' => 'district_id',
        'name' => 'district_id',
      ),
      6 => 
      array (
        'data' => 'zone_id',
        'name' => 'zone_id',
      ),
      7 => 
      array (
        'data' => 'area_id',
        'name' => 'area_id',
      ),
      8 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Churches\\Forms\\ChurchesForm',
    'permissions' => 
    array (
      'churches' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'attendance' => 
  array (
    'name' => 'Attendance',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'Home Cell',
      1 => 'male',
      2 => 'female',
      3 => 'children',
      4 => 'total',
      5 => 'date',
      6 => 'week',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'homechurch_id',
        'name' => 'homechurch_id',
      ),
      1 => 
      array (
        'data' => 'male',
        'name' => 'male',
      ),
      2 => 
      array (
        'data' => 'female',
        'name' => 'female',
      ),
      3 => 
      array (
        'data' => 'children',
        'name' => 'children',
      ),
      4 => 
      array (
        'data' => 'total',
        'name' => 'toatl',
      ),
      5 => 
      array (
        'data' => 'date',
        'name' => 'date',
      ),
      6 => 
      array (
        'data' => 'week',
        'name' => 'week',
      ),
      7 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Attendance\\Forms\\AttendanceForm',
    'permissions' => 
    array (
      'attendance' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'zones' => 
  array (
    'name' => 'Zones',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'code',
      2 => 'country',
      3 => 'region',
      4 => 'state',
      5 => 'district',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'code',
        'name' => 'code',
      ),
      2 => 
      array (
        'data' => 'country_id',
        'name' => 'country_id',
      ),
      3 => 
      array (
        'data' => 'region_id',
        'name' => 'region_id',
      ),
      4 => 
      array (
        'data' => 'state_id',
        'name' => 'state_id',
      ),
      5 => 
      array (
        'data' => 'district_id',
        'name' => 'district_id',
      ),
      6 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Zones\\Forms\\ZonesForm',
    'permissions' => 
    array (
      'zones' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
        6 => 'getDistrictZone',
      ),
    ),
  ),
  'testimonials' => 
  array (
    'name' => 'Testimonials',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-star',
    ),
    'th' => 
    array (
      0 => 'name',
      1 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'name',
        'name' => 'name',
      ),
      1 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      2 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Testimonials\\Forms\\TestimonialsForm',
    'permissions' => 
    array (
      'testimonials' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'blocks' => 
  array (
    'name' => 'Blocks',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-file',
    ),
    'th' => 
    array (
      0 => 'title',
      1 => 'slug',
      2 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'title',
        'name' => 'title',
      ),
      1 => 
      array (
        'data' => 'slug',
        'name' => 'slug',
      ),
      2 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      3 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Blocks\\Forms\\BlocksForm',
    'permissions' => 
    array (
      'blocks' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'partners' => 
  array (
    'name' => 'Partners',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
      'icon' => 'fa fa-handshake',
    ),
    'th' => 
    array (
      0 => 'company',
      1 => 'email',
      2 => 'status',
    ),
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'company',
        'name' => 'company',
      ),
      1 => 
      array (
        'data' => 'email',
        'name' => 'email',
      ),
      2 => 
      array (
        'data' => 'status',
        'name' => 'status',
      ),
      3 => 
      array (
        'data' => 'action',
        'name' => 'action',
      ),
    ),
    'form' => 'Partners\\Forms\\PartnersForm',
    'permissions' => 
    array (
      'partners' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'pages' => 
  array (
    'name' => 'Pages',
    'order' => 
    array (
      'id' => 'asc',
    ),
    'sidebar' => 
    array (
      'weight' => 2,
    ),
    'th' => 
    array (
      0 => 'title',
      1 => 'parent',
      2 => 'uri',
      3 => 'status',
    ),
    'form' => 'Pages\\Forms\\PageForm',
    'columns' => 
    array (
      0 => 
      array (
        'data' => 'title',
        'name' => 'pages.title',
      ),
      1 => 
      array (
        'data' => 'parent_title',
        'name' => 'parent_page.title',
      ),
      2 => 
      array (
        'data' => 'uri',
        'name' => 'pages.uri',
      ),
      3 => 
      array (
        'data' => 'status',
        'name' => 'pages.status',
      ),
      4 => 
      array (
        'data' => 'action',
        'name' => 'action',
        'orderable' => false,
        'searchable' => false,
      ),
    ),
    'permissions' => 
    array (
      'pages' => 
      array (
        0 => 'index',
        1 => 'create',
        2 => 'store',
        3 => 'edit',
        4 => 'update',
        5 => 'destroy',
      ),
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
