<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateProductTypeRequest;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ProductType::all();
        return view('product-types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductTypeRequest  $request)
    {
        $type = ProductType::create($request->all());
       
        Session::flash('message', "Type Created");
        return redirect(route('product-types.index'));
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
        $type = ProductType::find($id);
        
        if (empty($type)) {
            Session::flash('message', "Type Not Found");
            return redirect(route('product-types.index'));
        }

        return view('product-types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductTypeRequest $request, $id)
    {
        $type = ProductType::find($id);
        
        if (empty($type)) {
            Session::flash('message', "Type Not Found");
            return redirect(route('product-types.index'));
        }

        $type->update($request->all());
    
        Session::flash('message', "Type Updated");
        return redirect(route('product-types.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = ProductType::find($id);
        
        if (empty($type)) {
            Session::flash('message', "Type Not Found");
            return redirect(route('product-types.index'));
        }

        $type->delete();
    
        Session::flash('message', "Type Deleted");
        return redirect(route('product-types.index'));
    }
}
