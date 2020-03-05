<?php

if(!function_exists('current_user')){
    function current_user(){
        return app('Modules\Users\Repositories\AuthenticationInterface')->check();
    }
}

if(!function_exists('current_user_groups')){
    function current_user_groups($all=false){
        $user = current_user();
        if($user){
            $groups = $user->groups();
            return ($all) ? $groups : $groups->first();
        }
        return false;
    }
}

if(!function_exists('is_parent_group')){
    function is_parent_group(){
        $group = current_user_groups();
        if($group && $group->name == 'Parent') return true;
        return false;
    }
}

if(!function_exists('is_admin_group')){
    function is_admin_group(){
        $group = current_user_groups();
        if($group && $group->name == 'Admin') return true;
        return false;
    }
}

if(!function_exists('current_user_email')){
    function current_user_email(){
        $user = current_user();
        if($user){
            return $user->email;
        }
        return '';
    }
}

if(!function_exists('is_user_current')){
    function is_user_current($user_id)
    {
        $user = current_user();
        if (isset($user)){
            if ($user_id == current_user()->id)
            {
                return true;
            }
        }
        return false;
    }
}

if(!function_exists('generate_password')){
    function generate_password(){
        $password = substr(md5(rand()), 0, 7);
        return $password;
    }
}

if(!function_exists('has_access')){
    function has_access($permission)
    {
        return app('Modules\Users\Repositories\AuthenticationInterface')->hasAccess($permission);
    }
}