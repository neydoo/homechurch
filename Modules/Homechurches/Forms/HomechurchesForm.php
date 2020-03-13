<?php

namespace Modules\Homechurches\Forms;

use Kris\LaravelFormBuilder\Form;

class HomechurchesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('church_id', 'select', [
                'label'=>'Church',
                'choices' => $this->getData('churches'),
                'empty_value' => '- Select Church -'
            ])
            ->add('name', 'text')
            ->add('description', 'textarea');
    }
}
