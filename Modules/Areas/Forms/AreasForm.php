<?php

namespace Modules\Areas\Forms;

use Kris\LaravelFormBuilder\Form;

class AreasForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
