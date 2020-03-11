<?php

namespace Modules\Regions\Forms;

use Kris\LaravelFormBuilder\Form;

class RegionsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('country_id', 'select', [
                'label'=>'Country',
                'attr'=>[
                    'class'=>'form-control country_id','required'
                ],
                'choices' => $this->getData('countries'),
                'empty_value' => '- Select Page -'
            ])
            ->add('name', 'text');
    }
}
