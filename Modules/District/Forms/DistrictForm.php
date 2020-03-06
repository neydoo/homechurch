<?php

namespace Modules\District\Forms;

use Kris\LaravelFormBuilder\Form;

class DistrictForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
