<?php namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Routing\Controller;
use stdClass;

class DashboardAccountController extends Controller  {

    public function __construct()
    {
        $this->middleware('auth.account');
    }
	public function index()
	{
        $page = new stdClass; 
        $page->title = "Dashboard"; 
        $page->description = "Dashboard"; 
        $page->meta_description = "";
        $page->css = ""; 
        $page->js = "";
        $page->id = 1; 
        $page->status = 1;
        $data['page'] = $page;
		return view('dashboard::public.index')->with($data);
	}

}