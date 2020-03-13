<?php

namespace Modules\Groupchats\Forms;

use Kris\LaravelFormBuilder\Form;

class GroupchatsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
