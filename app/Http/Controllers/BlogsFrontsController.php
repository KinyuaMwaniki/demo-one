<?php

namespace App\Http\Controllers;

use App\Blog;
use App\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogsFrontsController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        $company_detail = CompanyDetail::all()->first();
        $recent_blogs = Blog::orderBy('created_at', 'DESC')->limit(5)->get();
        return view('frontend.blogs.index', compact(['blogs', 'company_detail', 'recent_blogs']));
    }
    public function show($id) {
            $blog = Blog::find($id);
            $blogs = Blog::all();
            $company_detail = CompanyDetail::all()->first();
            $recent_blogs = Blog::orderBy('created_at', 'DESC')->limit(5)->get();
            
            if (empty($blog)) {
                Session::flash('message', "Blog Not Found");
                return redirect(route('blogs.index'));
            }

            return view('frontend.blogs.show', compact(['blog', 'company_detail', 'recent_blogs', 'blogs']));
    } 
}
