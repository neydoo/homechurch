<?php

namespace Modules\Announcements\Forms;

use Kris\LaravelFormBuilder\Form;

class AnnouncementsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
