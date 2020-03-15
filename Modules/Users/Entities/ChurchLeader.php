<?php namespace Modules\Users\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class ChurchLeader extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Users\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

    protected $table = 'churchleaders';

    public function churchleaderable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}