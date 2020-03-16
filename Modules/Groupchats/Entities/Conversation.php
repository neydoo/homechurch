<?php namespace Modules\Groupchats\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Users\Entities\Sentinel\User;

class Conversation extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Groupchats\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

    protected $fillable = ['message', 'user_id', 'groupchat_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Groupchat::class,'groupchat_id');
    }

}