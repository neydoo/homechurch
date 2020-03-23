<?php namespace Modules\Offering\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\History\Traits\Historable;

class Offering extends Base {

    use PresentableTrait,Historable;

    protected $presenter = 'Modules\Offering\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

    protected $table = 'offering';

    public function offeringable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    public function homechurch()
    {
        return $this->belongsTo('Modules\Homechurches\Entities\Homechurch');
    }

    public function groupchat()
    {
        return $this->belongsTo('Modules\Groupchats\Entities\Groupchat');
    }
}