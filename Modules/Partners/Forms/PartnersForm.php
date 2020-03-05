<?php

namespace Modules\Partners\Forms;

use Kris\LaravelFormBuilder\Form;

class PartnersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('company', 'text')
            ->add('address', 'text')
            ->add('tag', 'text')
            ->add('website', 'text')
            ->add('email', 'text')
            ->add('phone', 'text')
            ->add('status', 'select', [
                'choices' => ['1' => 'live', '0' => 'draft'],
            ])
            ->add('body', 'textarea',[
                'attr'=>['class'=>'form-control']
            ]);
    }
}
