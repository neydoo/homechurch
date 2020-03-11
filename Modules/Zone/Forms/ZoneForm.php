<?php

namespace Modules\Zone\Forms;

use Kris\LaravelFormBuilder\Form;

class ZoneForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
