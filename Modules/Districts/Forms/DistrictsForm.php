<?php

namespace Modules\Districts\Forms;

use Kris\LaravelFormBuilder\Form;

class DistrictsForm extends Form
{
    public function buildForm()
    {
        $churchtype = !empty(get_current_church()) ? get_current_church() : '';
        if(!empty($churchtype)){
            if(current_user()->hasChurch('state')){
                $this->add('state_id', 'select', [
                    'label'=>'States',
                    'choices' => $this->getData('states'),
                    'empty_value' => '- Select State -'
                ])
                ->add('name', 'text');
            }elseif(current_user()->hasChurch('region')){
                $this->add('region_id', 'select', [
                    'label'=>'Region',
                    'choices' => $this->getData('regions'),
                    'empty_value' => '- Select Region -'
                ])
                ->add('state_id', 'select', [
                    'label'=>'States',
                    'choices' => $this->getData('states'),
                    'empty_value' => '- Select State -'
                ])
                ->add('name', 'text');
            }
        }else{
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
            ->add('name', 'text');
        }
    }
}
