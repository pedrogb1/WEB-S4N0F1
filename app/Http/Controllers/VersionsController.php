<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Remedies;



class VersionsController extends Controller
{
    public function index($active_ingredient)
    {

        if (!Auth::check())
            return redirect('login');

        $updatedAtMax = Remedies::max('updated');
        
        $versions = Remedies::where('updated', $updatedAtMax)
            ->where('active_ingredients', $active_ingredient)
            ->get();


        return view('version', compact('versions'));
        
    }

    
}