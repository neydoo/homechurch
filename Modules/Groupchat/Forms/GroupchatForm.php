<?php

namespace Modules\Groupchat\Forms;

use Kris\LaravelFormBuilder\Form;

class GroupchatForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
