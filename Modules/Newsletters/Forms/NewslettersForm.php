<?php

namespace Modules\Newsletters\Forms;

use Kris\LaravelFormBuilder\Form;

class NewslettersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('subject', 'text')
            ->add('file', 'file')
            ->add('status', 'select', [
                'choices' => ['1' => 'live', '0' => 'draft'],
            ])
            ->add('content', 'textarea',[
                'attr'=>['class'=>'form-control','rows' => 3]
            ]);
    }
}
