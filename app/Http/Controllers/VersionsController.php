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
            ->select('dosage', 'active_ingredients', 'complement', 'product')
            ->distinct()
            ->orderBy('complement')
            ->get();

        $possibleFormats = Remedies::where('updated', $updatedAtMax)
            ->where('active_ingredients', $active_ingredient)
            ->select('format')
            ->distinct()
            ->get();

        $possiblePackaging = Remedies::where('updated', $updatedAtMax)
            ->where('active_ingredients', $active_ingredient)
            ->select('packaging')
            ->distinct()
            ->get();

        $possibleTypes = Remedies::where('updated', $updatedAtMax)
            ->where('active_ingredients', $active_ingredient)
            ->select('type')
            ->distinct()
            ->get();

     
            


        return view('version', compact('versions', 'possibleFormats', 'possiblePackaging', 'possibleTypes'));
        
    }

    
}