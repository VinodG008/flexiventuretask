<?php

namespace App\Http\Controllers;

use App\Models\pujatype;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function homepage()
    {
        return \View::make('sitehomepage');
    }
   
    public function secondpageshow()
    {
        $boardMembers = pujatype::get();
    
        return view('secondpage',compact('boardMembers'));
        
    }
}
