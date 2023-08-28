<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActiveIngredients;



class ActiveIngredientsController extends Controller
{
    public function index()
    {

        if (!Auth::check())
            return redirect('login');
        
           
        $activeIngredients = ActiveIngredients::all();

        return view('activeIngredients', compact('activeIngredients'));
        
    }

    
}