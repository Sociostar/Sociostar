<?php

namespace App\Http\Controllers;

use App\BlogPhoto;
use Illuminate\Http\Request;
use Storage;
class BlogPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\BlogPhoto  $blogPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPhoto $blogPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPhoto  $blogPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPhoto $blogPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPhoto  $blogPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPhoto $blogPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPhoto  $blogPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPhoto $blogphoto)
    {
        Storage::disk('public')->delete($blogphoto->photo);
        $blogphoto->delete();
        return redirect(route('blog.show',['blog' => $blogphoto->blog_id]));
    }
}
