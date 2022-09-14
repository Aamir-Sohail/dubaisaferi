<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\GalleryModel as AdminGalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = new AdminGalleryModel();
        return view('admin.gallery.addgallery');
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
        $this->validate($request, [

        ]);
        $gallery = new AdminGalleryModel();

        $gallery->price = $request->input('price');
        $gallery->country = $request->input('country');
        $gallery->description = $request->input('description');
        $gallery->title = $request->input('title');
        // $blog->file = $request->input('file');
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/gallery'), $filename);
            $gallery['file'] = $filename;
        }
        // if ($request->hasFile('file'))
        //  {
        //     $blog = $request->file('file');
        //     $extension = $blog->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $blog->move('uploads/blog/', $filename);
        //     $blog->file = $filename;
        // }
        // echo "<pre>";
        // print_r($blog->toarray());
        // echo "</pre>";
        // die;

        // dd($gallery); //ok
        $gallery->save();


        return redirect('admin/gallery');
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
