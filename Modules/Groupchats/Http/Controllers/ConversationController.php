<?php namespace Modules\Groupchats\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Groupchats\Repositories\GroupchatInterface as Repository;
use Modules\Groupchats\Events\NewMessage;
use Modules\Groupchats\Entities\Conversation;
use Modules\Groupchats\Http\Requests\ConversationRequest;

class ConversationController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function get($id)
    {
        return Conversation::where('group_id', $id)->with(['user'])->get();
    }
    public function store(ConversationRequest $request)
    {
        $conversation = Conversation::create([
            'message' => $request->message,
            'group_id' => $request->group_id,
            'user_id' => current_user()->id,
        ]);

        broadcast(new NewMessage($conversation))->toOthers();

        return $conversation->load('user');
    }
}
