<?php

namespace Modules\Manuals\Forms;

use Kris\LaravelFormBuilder\Form;

class ManualsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'label'=>'Title',
                'attr'=>[
                    'class'=>'form-control','required'
                ]
            ])
            ->add('body', 'textarea',[
                'label'=>'Description',
                'attr'=>[
                    'class'=>'form-control','required',
                    'rows'=>2
                ]
            ])
           
            ->add('status', 'select', [
                'choices' => ['1' => 'live', '0' => 'draft'],
                'empty_value' => '- Select status -',
                'selected'=>1
            ])

            ->add('document', 'file', [
                'label' => 'Document'
            ]);
    }
}
