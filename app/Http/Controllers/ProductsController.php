<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\CompanyDetail;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function index() {
        $company_detail = CompanyDetail::all()->first();
        $portfolios = Portfolio::all();
        return view('frontend.products', compact(['company_detail', 'portfolios']));
   } 
}
