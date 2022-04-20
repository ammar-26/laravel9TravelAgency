<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = category::all();
        return view('admin.category.index', ['category'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //;
        //echo $request;
        $category = new Category();
        $category->parent_id = 0;
        $category->title = $request->input('title');
        $category->keywords = $request->input('keywords');
        $category->description = $request->input('description');
        $image = $request->file;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $category->status = $request->input('status');
        $category->save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category, $id)
    {
        //
        
        $data = category::find($id);
        return view('admin.category.show', ['category'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category, $id)
    {
        //
        $data = category::find($id);
        return view('admin.category.edit', ['category'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category, $id)
    {
        //
        $category = category::find($id);
        $category->title = $request->input('title');
        $category->keywords = $request->input('keywords');
        $category->description = $request->input('description');
        if($request->file('image')){
            $category->image=$request->file('image')->store('image');
        }
        $category->status = $request->input('status');
        $category->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category, $id)
    {
        //
        $data = category::find($id);
        if($data->image && Storage::dist('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/category');
    }
}
