<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Str;
class PostController extends Controller
{
    
     public function category(){
        return $this->belongsTo('App\Category');       
    }
    
    public function index(){
        
        $rows = Post::paginate(5); 
        return view('admin.post.index', compact('rows'));
    }

    public function create(){
        $rows = Category::all();
        return view('admin.post.add', compact('rows'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
                'post_date' => 'required',
                'post_title' => 'required',
                'post_text' =>  'required',
                'post_cat_id'=> 'required'
            ]);
       $post = Post::create([
                'post_date' => $request->post_date,
                'post_slug' => Str::slug($request->post_title),
                'post_title'=> $request->post_title,
                'post_text' => $request->post_text,
                'post_cat_id'=>$request->post_cat_id
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
        $row = Post::findOrFail($id);
       return view('admin.post.edit', compact('row'));
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
           'post_date' => 'required',
            'post_title' => 'required',
            'post_text'=> 'required',
            'post_cat_id' => 'required'
        ]);

        $row = Post::findOrFail($id);
        $row->update([
                'post_date' => $request->post_date,
                'post_title'=> $request->post_title,
                'post_text' => $request->post_text,
                'post_cat_id'=>$request->post_cat_id    
        ]);
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $row = Post::findOrFail($id);
       $row->delete(); 

       return redirect('post');
    }
}
