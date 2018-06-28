<?php

namespace App\Http\Controllers\CRUD;

use App\Models\LCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('categories.list', [
			'lcategory' => LCategory::get()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		LCategory::create($request->all());
		
		return redirect()->back()->with(['success_msg' => 'Категория была создана']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LCategory  $lCategory
     * @return \Illuminate\Http\Response
     */
    public function show(LCategory $lCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LCategory  $lCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(LCategory $lCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LCategory  $lCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LCategory $lCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LCategory  $lCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LCategory $lCategory)
    {
        //
    }
}
