<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingRoutes extends Controller
{
    
    public function namingRoutes(){
    	return redirect()->route('profile');
    }
}
