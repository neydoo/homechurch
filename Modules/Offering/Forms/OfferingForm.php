<?php

namespace Modules\Offering\Forms;

use Kris\LaravelFormBuilder\Form;

class OfferingForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('type', 'select', [
                'label'=>'Type',
                'choices' => [
                    'groupchat' => 'Online Cells',
                    'homechurch' => 'Home Cells',
                ],
                'empty_value' => '- Select Type -'
            ])
            ->add('homechurch_id', 'select', [
                'label'=>'Church',
                'choices' => $this->getData('homechurches'),
                'empty_value' => '- Select Home church -'
            ])
            ->add('groupchat_id', 'select', [
                'label'=>'Church',
                'choices' => $this->getData('groupchats'),
                'empty_value' => '- Select Online church -'
            ])
            ->add('cash', 'text',[
                'value' => 0,
            ])
            ->add('pos', 'text',[
                'value' => 0,
            ])
            ->add('cheques', 'text',[
                'value' => 0,
            ])
            ->add('date', 'date');
    }
}
