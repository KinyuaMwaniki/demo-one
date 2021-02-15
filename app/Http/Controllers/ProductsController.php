<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\ProductType;
use App\CompanyDetail;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function index() {
        $company_detail = CompanyDetail::all()->first();
        $portfolios = Portfolio::with('type')->get();
        $types = ProductType::select('name')->get()->toArray();
        return view('frontend.products', compact(['company_detail', 'portfolios', 'types']));
   }
   
   public function show($id) {
      $portfolio = Portfolio::find($id);
      $company_detail = CompanyDetail::all()->first();
      $types = ProductType::pluck('name', 'id');
        
      if (empty($portfolio)) {
          Session::flash('message', "Portfolio Not Found");
          return redirect(route('landing'));
      }

      return view('frontend.show', compact(['portfolio', 'company_detail']));
   }
}
