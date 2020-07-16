<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('images');
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $image = new image;

    //     if($request->file('file')){
    //         $imagepath = $request->file('file');
    //         $imagename = $imagepath->getClientOriginalName();

    //         $path = $request->file('file')->storeAs('upload', $imagename, 'public');
    //     }

    //     $image->name = $imagename;
    //     $image->path = '/storage/' .$path;
    //     $image->save();
    //     return back()->with ('success', 'berhasil mengupload image ');
    // }


}
