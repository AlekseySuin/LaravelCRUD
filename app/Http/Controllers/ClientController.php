<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mortgage;

class ClientController extends Controller
{
    function mortgages_get(){
        $mortgages = Mortgage::where('IS_ACTIVE', '=', 1)->get();
        return view("mortgages", ['mortgages'=>$mortgages]);
    }

    function mortgages_details($id){
        $mortgages = Mortgage::where('ID', '=', $id)->get();
        return view("mortgage-details", ['mortgages'=>$mortgages]);
    } 
}
