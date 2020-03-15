<?php namespace Modules\Users\Forms;

use Kris\LaravelFormBuilder\Form;

class AssignLeadersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('type', 'select', [
                'label'=>'Type',
                'choices' => [
                    'local' => 'Local',
                    'area' => 'Area',
                    'zone' => 'Zone',
                    'district' => 'District',
                    'state' => 'State',
                    'region' => 'Region'
                ],
                'selected'=>0,
                'expanded' => true,
                'multiple' => false
            ])
            ->add('church_id', 'select', [
                'label'=>'Local Church',
                'choices' => $this->getData('churches'),
                'empty_value' => '- Select church -'
            ])
            ->add('area_id', 'select', [
                'label'=>'Area',
                'choices' => $this->getData('areas'),
                'empty_value' => '- Select Area -'
            ])
            ->add('zone_id', 'select', [
                'label'=>'Zone',
                'choices' => $this->getData('zones'),
                'empty_value' => '- Select church -'
            ])
            ->add('district_id', 'select', [
                'label'=>'Districts',
                'choices' => $this->getData('districts'),
                'empty_value' => '- Select District -'
            ])
            ->add('state_id', 'select', [
                'label'=>'State',
                'choices' => $this->getData('states'),
                'empty_value' => '- Select State -'
            ])
            ->add('region_id', 'select', [
                'label'=>'Region',
                'choices' => $this->getData('regions'),
                'empty_value' => '- Select Region -'
            ])
            ->add('status', 'choice', [
                'label'=>'Activated?',
                'choices' => [
                    0 => 'No',
                    1 => 'Yes'
                ],
                'selected'=>0,
                'expanded' => true,
                'multiple' => false
            ]);

    }
}