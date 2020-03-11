<?php

namespace Modules\Hierarchy\Forms;

use Kris\LaravelFormBuilder\Form;

class HierarchyForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
