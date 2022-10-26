<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio(){
        $protfolio = Portfolio::latest()->get();
        return view('admin.protfolio.all_protfolio',compact('protfolio'));
    }//end mathod

    public function AddPortfolio(){
        return view('admin.protfolio.protfolio_add');
    } // End Method


    public function StorePortfolio(Request $request){

    }// End Method
}
