<?php

namespace Modules\Manuals\Forms;

use Kris\LaravelFormBuilder\Form;

class ManualsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
