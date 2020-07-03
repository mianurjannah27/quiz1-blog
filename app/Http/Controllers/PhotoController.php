<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Post;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rows = Photo::paginate(5); 
        return view('admin.photo.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $rows = Post::all();
        return view('admin.photo.add', compact('rows'));
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
                'photo_date' => 'required',
                'photo_title' => 'required',
                'photo_text' =>  'required',
                'photo_post_id'=> 'required'
            ]);
            $photo_text = $request->photo_text;
            $new_photo = time().$photo_text->getClientOriginalName();

            $post = Photo::create([
                'photo_date' => $request->photo_date,
                'photo_title' => $request->photo_title,
                'photo_text'=> 'public/uploads/posts/'.$new_photo,
                'photo_post_id' => $request->photo_post_id

              ]);
            $photo_text-> move('public/uploads/posts/', $new_photo);
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
        $row = Photo::findOrFail($id);
       return view('admin.photo.edit', compact('row'));
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
             'photo_date' => 'required',
                'photo_title' => 'required',
                'photo_text' =>  'required',
                'photo_post_id'=> 'required'
        ]);

        $photo_text = $request->photo_text;
        $new_photo = time().$photo_text;

        $row = Photo::findOrFail($id);
        $row->update([
                    
         'photo_date' => $request->photo_date,
         'photo_title' => $request->photo_title,
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $row = Photo::findOrFail($id);
       $row->delete(); 

       return redirect('photo');
    }
}
