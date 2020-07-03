<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::paginate(4); 
        return view('admin.category.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
               
                'cat_name' =>  'required|min:3',
                'cat_text'=> 'required'
            ]);
       $category = Category::create([
                'cat_name' => $request->cat_name,
                'cat_text' => $request->cat_text
       ]);
       return redirect()->back()->with('success','postingan anda berhasil diunggah');
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
       $row = Category::findOrFail($id);
       return view('admin.category.edit', compact('row'));
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
         $request->validate([
            'cat_name' => 'bail|required|unique:tb_category',
            'cat_name' => 'required'
        ]);

        $row = Category::findOrFail($id);
        $row->update([
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
            ]);
        return redirect()->route('category.index')->with('success','Data Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $row = Category::findOrFail($id);
       $row->delete(); 

       return redirect()->back()->with('success','Data Berhasil di Hapus');
    }
}
