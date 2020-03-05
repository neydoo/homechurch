<?php

namespace Modules\Faqs\Forms;

use Kris\LaravelFormBuilder\Form;

class FaqsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('question', 'text')
            ->add('answer', 'textarea',[
                'attr'=>['class'=>'form-control summernote']
            ])
            ->add('status', 'select', [
                'choices' => ['1' => 'live', '0' => 'draft'],
            ]);
    }
}
