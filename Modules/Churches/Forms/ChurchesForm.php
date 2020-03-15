<?php

namespace Modules\Churches\Forms;

use Kris\LaravelFormBuilder\Form;

class ChurchesForm extends Form
{
    public function buildForm()
    {
        $churchtype = !empty(get_current_church()) ? get_current_church() : '';
        if(!empty($churchtype)){
            if(current_user()->hasChurch('area')){
                $this->add('area_id', 'select', [
                    'label'=>'Area',
                    'choices' => $this->getData('areas'),
                    'empty_value' => '- Select Area -'
                ])
                ->add('name', 'text');
            }
            elseif(current_user()->hasChurch('zone')){
                $this->add('zone_id', 'select', [
                    'label'=>'Zones',
                    'choices' => $this->getData('zones'),
                    'empty_value' => '- Select Zones -'
                ])
                ->add('area_id', 'select', [
                    'label'=>'Area',
                    'choices' => $this->getData('areas'),
                    'empty_value' => '- Select Area -'
                ])
                ->add('name', 'text');
            }elseif(current_user()->hasChurch('district')){
                $this->add('district_id', 'select', [
                    'label'=>'District',
                    'choices' => $this->getData('districts'),
                    'empty_value' => '- Select District -'
                ])
                ->add('zone_id', 'select', [
                    'label'=>'Zones',
                    'choices' => $this->getData('zones'),
                    'empty_value' => '- Select Zones -'
                ])
                ->add('area_id', 'select', [
                    'label'=>'Area',
                    'choices' => $this->getData('areas'),
                    'empty_value' => '- Select Area -'
                ])
                ->add('name', 'text');
            }elseif(current_user()->hasChurch('state')){
                $this->add('state_id', 'select', [
                    'label'=>'States',
                    'choices' => $this->getData('states'),
                    'empty_value' => '- Select State -'
                ])
                ->add('district_id', 'select', [
                    'label'=>'District',
                    'choices' => $this->getData('districts'),
                    'empty_value' => '- Select District -'
                ])
                ->add('zone_id', 'select', [
                    'label'=>'Zones',
                    'choices' => $this->getData('zones'),
                    'empty_value' => '- Select Zones -'
                ])
                ->add('area_id', 'select', [
                    'label'=>'Area',
                    'choices' => $this->getData('areas'),
                    'empty_value' => '- Select Area -'
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
                ->add('district_id', 'select', [
                    'label'=>'District',
                    'choices' => $this->getData('districts'),
                    'empty_value' => '- Select District -'
                ])
                ->add('zone_id', 'select', [
                    'label'=>'Zones',
                    'choices' => $this->getData('zones'),
                    'empty_value' => '- Select Zones -'
                ])
                ->add('area_id', 'select', [
                    'label'=>'Area',
                    'choices' => $this->getData('areas'),
                    'empty_value' => '- Select Area -'
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
                ->add('district_id', 'select', [
                    'label'=>'District',
                    'choices' => $this->getData('districts'),
                    'empty_value' => '- Select District -'
                ])
                ->add('zone_id', 'select', [
                    'label'=>'Zones',
                    'choices' => $this->getData('zones'),
                    'empty_value' => '- Select Zones -'
                ])
                ->add('area_id', 'select', [
                    'label'=>'Area',
                    'choices' => $this->getData('areas'),
                    'empty_value' => '- Select Area -'
                ])
                ->add('name', 'text');
        }
    }
}
