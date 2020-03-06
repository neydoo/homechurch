<?php

namespace Modules\Offering\Forms;

use Kris\LaravelFormBuilder\Form;

class OfferingForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
