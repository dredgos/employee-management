<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user === null) {
            throw new ModelNotFoundException("User does not exist");
        }
        return view ("dashboard", ["user" => $user]);
    }

    
}
