<?php

namespace Modules\Attendance\Forms;

use Kris\LaravelFormBuilder\Form;

class AttendanceForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
