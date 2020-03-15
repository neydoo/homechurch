<?php

namespace Modules\Attendance\Forms;

use Kris\LaravelFormBuilder\Form;

class AttendanceForm extends Form
{
    public function buildForm()
    {
        $this
         ->add('homechurch_id', 'select', [
                'label'=>'Church',
                'choices' => $this->getData('homechurches'),
                'empty_value' => '- Select Home church -'
            ])
            ->add('male', 'number')
            ->add('female', 'number')
            ->add('children', 'number')
            ->add('date', 'date');
    }
}
