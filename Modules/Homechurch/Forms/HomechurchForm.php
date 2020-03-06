<?php

namespace Modules\Homechurch\Forms;

use Kris\LaravelFormBuilder\Form;

class HomechurchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
