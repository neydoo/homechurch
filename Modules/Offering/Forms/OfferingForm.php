<?php

namespace Modules\Offering\Forms;

use Kris\LaravelFormBuilder\Form;

class OfferingForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('homechurch_id', 'select', [
                'label'=>'Church',
                'choices' => $this->getData('homechurches'),
                'empty_value' => '- Select Home church -'
            ])
            ->add('amount', 'text')
            ->add('date', 'date');
    }
}
