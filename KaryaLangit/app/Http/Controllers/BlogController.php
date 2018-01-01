<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogPhoto;
use Illuminate\Http\Request;
use Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index',[
          'data' => Blog::all()
        ]);
    }

    public function list(){
      return view('blog.list',[
        'data' => Blog::orderBy('id','desc')->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = Blog::create($request->all());
        foreach ($request->photo as $photo) {
          $path = $photo->store('blog', 'public');
          BlogPhoto::create([
            'blog_id' => $blog->id,
            'photo' => $path
          ]);
        }
        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show',[
          'data' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
      return view('blog.edit',[
        'data' => $blog
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
      $blog->update($request->all());
      if ($request->photo) {
        foreach ($request->photo as $photo) {
          $path = $photo->store('blog', 'public');
          BlogPhoto::create([
            'blog_id' => $blog->id,
            'photo' => $path
          ]);
        }
      }
      return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        foreach ($blog->Photo as $row) {
          Storage::disk('public')->delete($row->photo);
          $row->delete();
        }
        $blog->delete();
        return redirect(route('blog.index'));
    }
}
