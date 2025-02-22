<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mortgage;

class MortgagesController extends Controller
{
    protected function validate_data($request)
    {
        $request->merge([
            'PERCENT' => (int) $request->PERCENT,
            'MIN_FIRST_PAYMENT' => (int) $request->MIN_FIRST_PAYMENT,
            'MIN_PRICE' => (float) $request->MIN_PRICE,
            'MAX_PRICE' => (float) $request->MAX_PRICE,
            'MIN_TERM' => (int) $request->MIN_TERM,
            'MAX_TERM' => (int) $request->MAX_TERM,
            'IS_ACTIVE' => (bool) $request->IS_ACTIVE,
        ]); 
        return $request->validate([
            'TITLE' => 'required|string|max:255',
            'DESCRIPTION' => 'nullable|string',
            'PERCENT' => 'required|integer|min:0|max:40',
            'MIN_FIRST_PAYMENT' => 'required|integer|min:0|max:98',
            'MIN_PRICE' => 'required|numeric',
            'MAX_PRICE' => 'required|numeric',
            'MIN_TERM' => 'required|integer',
            'MAX_TERM' => 'required|integer',
            'IS_ACTIVE' => 'boolean',
        ]);
    }
    
    function mortgages_add(Request $request){
        $validated_data = $this->validate_data($request);
        Mortgage::create($validated_data);

        return redirect("mortgages");
    }

    function mortgages_create(){
        return view('create_mortgage');
    } 

    function mortgages_delete(){

    }

    function mortgages_edit_form($id){
        $mortgages = Mortgage::where('ID', '=', $id)->get();
        return view("edit_mortgage", ['mortgages'=>$mortgages]);
    }

    function mortgages_update(Request $request,$id){
        $mortgage = Mortgage::find($id);
        if(!$mortgage){
            return redirect()->route('home');
        }

        $validated_data = $this->validate_data($request);
        $mortgage->update($validated_data);

        return redirect()->route('home');
    }
}
