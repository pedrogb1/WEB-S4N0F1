<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ScrapingStatus;



class ScrapingStatusController extends Controller
{
    public function index()
    {

        if (!Auth::check())
            return redirect('login');
        
        $scrapingStatus = ScrapingStatus::all();
        

        return view('scrapingStatus', compact('scrapingStatus'));
        
    }

    
}