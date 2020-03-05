<?php

namespace Modules\Testimonials\Forms;

use Kris\LaravelFormBuilder\Form;

class TestimonialsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('status', 'select', [
                'choices' => ['1' => 'live', '0' => 'draft'],
            ])
            ->add('image', 'file',[
                'label' => 'Photo'
            ])
            ->add('body', 'textarea',[
                'attr'=>['class'=>'form-control mini-summernote']
            ]);
    }
}
