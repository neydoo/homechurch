<?php

namespace Modules\Zones\Forms;

use Kris\LaravelFormBuilder\Form;

class ZonesForm extends Form
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
                'label'=>'States',
                'choices' => $this->getData('states'),
                'empty_value' => '- Select State -'
            ])
            ->add('district_id', 'select', [
                'label'=>'District',
                'choices' => $this->getData('districts'),
                'empty_value' => '- Select District -'
            ])
            ->add('name', 'text');
    }
}
