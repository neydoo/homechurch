<?php

namespace Modules\Zones\Forms;

use Kris\LaravelFormBuilder\Form;

class ZonesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
