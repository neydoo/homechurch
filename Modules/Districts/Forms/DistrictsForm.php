<?php

namespace Modules\Districts\Forms;

use Kris\LaravelFormBuilder\Form;

class DistrictsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('country_id', 'select', [
                'label'=>'Country',
                'choices' => $this->getData('countries'),
                'empty_value' => '- Select Country -'
            ])
            ->add('region_id', 'select', [
                'label'=>'Region',
                'choices' => $this->getData('regions'),
                'empty_value' => '- Select Region -'
            ])
            ->add('state_id', 'select', [
                'label'=>'State',
                'choices' => $this->getData('states'),
                'empty_value' => '- Select State -'
            ])
            ->add('name', 'text');
    }
}