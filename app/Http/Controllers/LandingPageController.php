<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Service;
use App\Portfolio;
use App\CompanyDetail;
use App\BusinessPromise;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $company_detail = CompanyDetail::all()->first();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $promises = BusinessPromise::all();
        $blogs = Blog::all();
        return view('frontend.landing', compact(['company_detail', 'portfolios', 'services', 'promises', 'blogs']));
    }
}
