<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Remedies;



class RemediesController extends Controller
{
    public function index()
    {

        if (!Auth::check())
            return redirect('login');
        
        $updatedAtMax = Remedies::max('updated');
        
        $remedies = Remedies::where('updated', $updatedAtMax)
            ->groupBy(['active_ingredients'])
            ->selectRaw('COUNT(*) as count, active_ingredients')
            ->orderBy('count', 'desc')
            ->get();

        return view('remedies', compact('remedies'));
        
    }

    
}