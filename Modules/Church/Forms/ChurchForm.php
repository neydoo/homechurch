<?php

namespace Modules\Church\Forms;

use Kris\LaravelFormBuilder\Form;

class ChurchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
