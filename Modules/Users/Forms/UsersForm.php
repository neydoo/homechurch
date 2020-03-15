<?php namespace Modules\Users\Forms;

use Kris\LaravelFormBuilder\Form;

class UsersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('first_name', 'text',[
                'label'=>'First Name',
                'attr'=>[
                    'class'=>'form-control','required'
                ]
            ])
            ->add('last_name', 'text',[
                'label'=>'Last Name',
                'attr'=>[
                    'class'=>'form-control','required'
                ]
            ])
            ->add('username', 'text',[
                'label'=>'Username',
                'attr'=>[
                    'class'=>'form-control','required'
                ]
            ])
            ->add('phone', 'text',[
                'label'=>'Phone Number',
                'attr'=>[
                    'class'=>'form-control','required'
                ]
            ])
            ->add('address', 'textarea',[
                'label'=>'Address',
                'attr'=>[
                    'class'=>'form-control','required',
                    'rows'=>2
                ]
            ])
            ->add('email', 'text',[
                'attr'=>[
                    'class'=>'form-control','required'
                ]
            ])
            ->add('gender', 'select', [
                'label'=>'Gender',
                'choices' => [
                    'Male' => 'Male',
                    'Female' => 'Female'
                ],
                'selected'=>0,
                'expanded' => true,
                'multiple' => false
            ])
            ->add('password', 'password',[
                'attr'=>[
                    'class'=>'form-control required',
                    'value'=>''
                ]
            ])
            ->add('confirm_password', 'password',[
                'label'=>'Confirm Password',
                'attr'=>[
                    'class'=>'form-control required'
                ]
            ])
           /* ->add('roles', 'select',[
                'label'=>'Parent',
                'empty_value'=>'-- select roles --',
                'choices'=>$this->getData('roles'),
                'multiple'=>true
            ])*/
            ->add('activated', 'choice', [
                'label'=>'Activated?',
                'choices' => [
                    0 => 'No',
                    1 => 'Yes'
                ],
                'selected'=>0,
                'expanded' => true,
                'multiple' => false
            ])

            ->add('avatar', 'file', [
                'label' => 'Avatar'
            ])
            ->add('type', 'select', [
                'label'=>'Type',
                'choices' => [
                    'groupchat' => 'Group Chats',
                    'homechurch' => 'Home Cells',
                    'local' => 'Local',
                    'area' => 'Area',
                    'zone' => 'Zone',
                    'district' => 'District',
                    'state' => 'State',
                    'region' => 'Region'
                ],
                'attr'=>[
                    'class'=>'form-control required',
                    // 'required'=>'required'
                ],
                'empty_value' => '- Select Type -'
            ])
            ->add('church_id', 'select', [
                'label'=>'Local Church',
                'choices' => $this->getData('churches'),
                'empty_value' => '- Select church -'
            ])
            ->add('area_id', 'select', [
                'label'=>'Area',
                'choices' => $this->getData('areas'),
                'empty_value' => '- Select Area -'
            ])
            ->add('zone_id', 'select', [
                'label'=>'Zone',
                'choices' => $this->getData('zones'),
                'empty_value' => '- Select church -'
            ])
            ->add('district_id', 'select', [
                'label'=>'Districts',
                'choices' => $this->getData('districts'),
                'empty_value' => '- Select District -'
            ])
            ->add('state_id', 'select', [
                'label'=>'State',
                'choices' => $this->getData('states'),
                'empty_value' => '- Select State -'
            ])
            ->add('region_id', 'select', [
                'label'=>'Region',
                'choices' => $this->getData('regions'),
                'empty_value' => '- Select Region -'
            ])
            ->add('status', 'select', [
                'label'=>'Is Active?',
                'choices' => [
                    0 => 'No',
                    1 => 'Yes'
                ],
                'empty_value' => '- Select Status -'
            ]);

    }
}