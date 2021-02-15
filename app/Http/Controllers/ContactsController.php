<?php

namespace App\Http\Controllers;

use App\CompanyDetail;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $company_detail = CompanyDetail::all()->first();
        return view('frontend.contacts.index', compact(['company_detail']));
    }
}
