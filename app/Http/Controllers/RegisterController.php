<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    
    public function setHouse(){
        
        
        return view('login.register_house');
    }




     public function storeHouse(Request $request){

        
        $house =   $request->validate(
            [
                'house' => [
                    'required', 
                    Rule::in(['ravenclaw', 'gryffindor', 'slytherin', 'hufflepuff' ])
                ],
            ]
        );


        Auth::user() -> house = request('house');
        Auth::user() -> save(); 

    
        
       return redirect("/register/wand");
     }




    public function setWand(){
        
        return view('login.register_wand');
        
    }




    public function storeWand(Request $request){

        
        $wand = $request->validate(
            [
                'wood' => 'required',
                'core' => 'required',
                'width' => 'required',

            ]
        );


        Auth::user() -> wand_wood = request('wood');
        Auth::user() -> wand_inside = request('core');
        Auth::user() -> wand_length = request('width');
        Auth::user() -> save(); 

    
        
       return redirect("/");
     }

}
