<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {
        $blog = Blog::create($request->all());
       
        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/blog', $fileNameToStore);
            $blog->image = $fileNameToStore;
            $blog->save();
        }

        Session::flash('message', "Blogs Created");
        return redirect(route('blogs.index'));
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
        $blog = Blog::find($id);
        
        if (empty($blog)) {
            Session::flash('message', "Blog Not Found");
            return redirect(route('blogs.index'));
        }

        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        
        if (empty($blog)) {
            Session::flash('message', "Blog Not Found");
            return redirect(route('blogs.index'));
        }
        $blog->update($request->all());
       
        if($request->hasFile('image'))
        {

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/blog', $fileNameToStore);
            $blog->image = $fileNameToStore;
            $blog->save();
        }

        Session::flash('message', "Blog Updated");
        return redirect(route('blogs.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        
        if (empty($blog)) {
            Session::flash('message', "Blog Not Found");
            return redirect(route('blogs.index'));
        }
        
        $blog->delete();

        Session::flash('message', "Blog Deleted");
        return redirect(route('blogs.index'));


    }
}
