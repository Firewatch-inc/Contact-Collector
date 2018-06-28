<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LSex;
use App\Models\LCategory;

class IndexPageController extends Controller
{
	    
    public function index()
    {
        return view('index');
    }

    public function add()
    {
        return view('contacts.add');
    }

    public function list()
    {
        return view('contacts.list');
    }
	
	public function ltables()
	{
		return view('settings.ltables', [
			'lsex' => LSex::get(),
			'lcategory' => LCategory::paginate(10),
		]);
	}

}
