<?php

namespace Modules\Offerring\Forms;

use Kris\LaravelFormBuilder\Form;

class OfferringForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
