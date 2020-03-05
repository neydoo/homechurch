<?php

use Illuminate\Support\Str;

if(!function_exists('generate_datatable')){
    function generate_datatable($table_headings){
        $str = '';
        $str .= '<table class="table table-bordered table-hover" id="data-table"><thead><tr>';
        foreach($table_headings as $th){
            $th = str_replace('_',' ',$th);
            $str .= '<th>'.ucwords($th).'</th>';
        }
        $str .= '<th></th>';
        $str .= '</tr></thead></table>';
        return $str;
    }
}

if(!function_exists('get_pages')){
    function get_pages()
    {
        $model = app('Modules\Pages\Repositories\PageInterface');
        return $model->select('all', false,'title','id');
    }
}
if(!function_exists('get_categories')){
    function get_categories($type='publication')
    {
        $model = app('Modules\Categories\Repositories\CategoryInterface');
        return $model->allBy('type',$type)->pluck('title', 'id')->all();
    }
}
if(!function_exists('get_faq_categories')){
    function get_faq_categories()
    {
        $model = app('Modules\Faqs\Repositories\FaqCategoryInterface');
        return $model->select('all', false,'category','category_id')->toArray();
    }
}

if(!function_exists('delete_btn')){
    function delete_btn($route='',$confirm=null){
        if(is_null($confirm)){
            $confirm = trans('core::global.delete_record');
        }
        return '<a class="btn btn-danger btn-sm delete-me btn-icon tooltips" href="'.$route.'" data-confirm="'.$confirm.'" data-placement="top" data-original-title="Delete">
                    <i class="fa fa-trash"></i>
                </a>';
    }
}

if(!function_exists('edit_btn')){
    function edit_btn($route=''){
        return '<a class="btn btn-primary btn-sm btn-icon tooltips" href="'.$route.'" data-placement="top" data-original-title="Edit">
                    <i class="fa fa-edit"></i>
                </a>';
    }
}

if(!function_exists('single_btn')){
    function single_btn($route='',$text=false){
        $text = ($text) ? $text : '';
        return '<a class="btn btn-warning btn-sm btn-icon tooltips" href="'.$route.'" data-placement="top" data-original-title="View Details">
                    <i class="fa fa-eye"></i>'.$text.'
                </a>';
    }
}

if(!function_exists('ajax_edit_btn')){
    function ajax_edit_btn($route=''){
        return '<a class="btn btn-warning btn-xs ajax-modal-link" href="" data-toggle="modal" data-href="'.$route.'">
                        <i class="fa fa-pencil"></i>
                    </a>';
    }
}

if(!function_exists('download_btn')){
    function download_btn($route){
        return '<a class="btn btn-warning btn-xs" href="'.$route.'">
            <i class="fa fa-eye"></i>
        </a>';
    }
}

    /**
     * Return the user friendly date
     * @param null $date
     * @return string
     */
if(!function_exists('format_date')){
    function format_date($date = null)
    {
        if(!is_null($date) && $date != '0000-00-00'){
            $date = new DateTime($date);
            return $date->format('d/m/Y');
        }
        return null;
    }
}

if(!function_exists('format_datetime')){
    function format_datetime($date = null)
    {
        $date = new DateTime($date);
        return $date->format('d/m/Y H:i');
    }
}

    /**
     * Return the database time
     * @param null $userDate
     * @return null|string
     */
if(!function_exists('unformat_date')){
    function unformat_date($userDate = null)
    {
        if ($userDate)
        {
            $date = DateTime::createFromFormat('d/m/Y', $userDate);

            return $date->format('Y-m-d');
        }

        return '0000-00-00';
    }
}

if(!function_exists('unformat_datetime')){
    function unformat_datetime($userDate = null)
    {
        if ($userDate)
        {
            $date = DateTime::createFromFormat('d/m/Y H:i', $userDate);

            return $date->format('Y-m-d H:i');
        }

        return '0000-00-00';
    }
}

if(!function_exists('file_upload')){
    function file_upload($file, $dir = null)
    {
        if ($file)
        {
            // Generate random dir
            if ( ! $dir) $dir = str_random(8);

            // Get file info and try to move
            $destination = public_path() .  '/uploads/' . $dir;
            $filename    = str_random(12).'.'.$file->getClientOriginalExtension();
            //dd($filename);
            $path        = '/uploads/' . $dir  . $filename;
            $uploaded    = $file->move($destination, $filename);

            if ($uploaded) return array('path'=>$path,'filename'=>$filename);
        }
    }
}

if(!function_exists('process_photo')){
    function process_photo($request, $photopath){
        $file = $request->file('photo');
        $random_name = str_random(8);
        $destinationPath = $photopath;
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name . '_cover.' . $extension;
        $uploadSuccess = $request->file('photo')
            ->move($destinationPath, $filename);
        return $filename;
    }
}

if(!function_exists('small_avatar')){
    function small_avatar($path,$attr=['class'=>'img-circle pull-left margin-right-10','style'=>'width:30px;']){
        if($path == ''){
            return \HTML::image('assets/admin/theme/img/avatar.png', 'profile photo', $attr);
        }
        return \HTML::image($path, 'profile photo', $attr);

    }
}

if(!function_exists('large_avatar')){
    function large_avatar($path,$attr=['class'=>'img-responsive']){
        if($path == ''){
            return \HTML::image('assets/admin/theme/img/profile.jpg', 'profile photo', $attr);
        }
        return \HTML::image('uploads/photos/'.$path, 'profile photo', $attr);

    }
}

if(!function_exists('status_label')){
    function status_label($status){
        if($status ==1){
            return '<label class="kt-badge kt-badge--inline kt-badge--success">Active</label>';
        }else{
            return '<label class="kt-badge kt-badge--inline kt-badge--danger">Inactive</label>';
        }
    }
}

if(!function_exists('is_featured_label')){
    function is_featured_label($status){
        if($status ==1){
            return '<label class="kt-badge kt-badge--inline kt-badge--success">Yes</label>';
        }else{
            return '<label class="kt-badge kt-badge--inline kt-badge--danger">No</label>';
        }
    }
}

if(!function_exists('payment_status_label')){
    function payment_status_label($status){
        if($status ==1){
            return '<label class="label label-success">Completed</label>';
        }else{
            return '<label class="label label-danger">Pending</label>';
        }
    }
}

if(!function_exists('readable_date')){
    function readable_date($date){
        return date('M d',strtotime($date));
    }
}

if(!function_exists('get_payment_plans')){
    function get_payment_plans(){
        return [
            'full'=>'Full Payment (Registration Fee and Total Amount)',
            'reg_only'=>'Registration Fee only',
            'reg_amount'=>'Registration and Any Amount'
        ];
    }
}

if(!function_exists('range_dropdown')){
    function range_dropdown($low,$high){
        $array = range($low,$high);
        $new_array = [];
        foreach($array as $a){
            $a = sprintf('%02d', $a);
            $new_array[$a] = $a;
        }
        return $new_array;
    }
}

if(!function_exists('format_currency')){
    function format_currency($amount)
    {

        $currency_symbol           = '$';
        $currency_symbol_placement = 'before';
        $thousands_separator       = ',';
        $decimal_point             = false;

        if ($currency_symbol_placement == 'before')
        {
            return $currency_symbol . number_format($amount, ($decimal_point) ? 2 : 0, $decimal_point, $thousands_separator);
        }
        else
        {
            return number_format($amount, ($decimal_point) ? 2 : 0, $decimal_point, $thousands_separator) . $currency_symbol;
        }
    }
}

if(!function_exists('format_amount')){
    function format_amount($amount = NULL)
    {
        if ($amount)
        {
            $decimal_point             = '.';

            return number_format($amount, ($decimal_point) ? 2 : 0, $decimal_point, '');
        }
        return NULL;
    }
}

if(!function_exists('standardize_amount')){
    function standardize_amount($amount)
    {
        $thousands_separator       = ',';
        $decimal_point             = '.';

        $amount = str_replace($thousands_separator, '', $amount);
        $amount = str_replace($decimal_point, '.', $amount);

        return $amount;
    }
}

if(!function_exists('range_dob_day')){
    function range_dob_day()
    {
        $dayRange = range(1, 31);
        $new_array = array(''=>'Day');
        foreach($dayRange as $key=> $dayNumber)
        {
            $new_array[$dayNumber] = $dayNumber;
        }
        return $new_array;
    }
}

if(!function_exists('range_dob_month')){
    function range_dob_month()
    {
        $monthRange = range(1,12);
        $new_array = array(''=>'Month');
        foreach($monthRange as $key=>$month)
        {
            $new_array[$month] = $month;
        }
        return $new_array;
    }
}

if(!function_exists('range_dob_year')){
    function range_dob_year()
    {
        $yearRange = range(1997, 1940);
        $new_array = array('' => 'Year');
        foreach ($yearRange as $key => $year) {
            $new_array[$year] = $year;
        }
        return $new_array;
    }
}

if(!function_exists('get_current_date')){
    function get_current_date(){
        $current_date = new Carbon\Carbon('this day');
        return $current_date->toDateTimeString();
    }
}

if(!function_exists('calculatePercentage')){
    function calculatePercentage($value,$total){
        return round($value/$total * 100);
    }
}

if(!function_exists('get_days')){
    function get_days(){
        return ['Sunday','Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday'];
    }
}

if(!function_exists('title_few')){
    function title_few($text,$limit){
        $text = strip_tags($text);
        $text = Str::words($text,$limit);
        return $text;
    }
}