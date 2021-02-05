<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Companyprof;

class Companyprofile extends Controller
{
    //
    public function index(){

        //$company=Companyprof::find(1)->get();

        return view('company-profile',['company'=>Companyprof::all()]);

    }
}
