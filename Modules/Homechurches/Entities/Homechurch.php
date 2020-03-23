<?php namespace Modules\Homechurches\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Users\Entities\Sentinel\User;
use Modules\History\Traits\Historable;

class Homechurch extends Base {

    use PresentableTrait,Historable;

    protected $presenter = 'Modules\Homechurches\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit','users'];

    public $attachments = ['image'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function hasUser($user_id)
    {
        foreach ($this->users as $user) {
            if($user->id == $user_id) {
                return true;
            }
        }
    }

    public function offering()
    {
        return $this->morphMany('Modules\Offering\Entities\Offering', 'Offeringable');
    }

}