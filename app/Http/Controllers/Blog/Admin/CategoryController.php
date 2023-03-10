<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Blog\Admin\BaseController;
use App\Http\Controllers\Blog\Admin\BlogCategory;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$paginator = BlogCategory::paginate(5);
	return view('blog.admin.category.index', compact('paginator'));		
    }

    public function edit($id)
    {
	$item = BlogCategory::findOrFail($id);
	$categoryList = BlogCategory::all();

	return view('blog.admin.category.edit', compact('item','categoryList'));
}
public function update(Request $request, $id)
{
	$item = BlogCategory::find($id);
	if(empty($item)){
		return back()->withErrors(['msg'=>"Запись id = [{$id}]не найдена"])->withInput();
	}

	$data = $request->all();
	$result = $item->fill($data)->save();
			
	if($result){
		return redirect()->route('blog.admin.categories.edit',$item->id)->with(['success'=>"Успешно сохранено"]);
	}else{
		return back()->withErrors(['msg'=>"Ошибка сохранения"])->withInput();
	}
}
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
