<?php

namespace Modules\Churches\Forms;

use Kris\LaravelFormBuilder\Form;

class ChurchesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
