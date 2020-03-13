<?php

namespace Modules\Groupchats\Http\Requests;

use Modules\Core\Http\Requests\AbstractFormRequest;

class AddUserRequest extends AbstractFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'group_id' => 'required',
            'users' => 'required',
        ];
    }


}
