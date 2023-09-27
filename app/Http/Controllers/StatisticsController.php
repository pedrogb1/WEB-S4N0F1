<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Remedies;



class StatisticsController extends Controller
{
    public function index()
    {

        if (!Auth::check())
            return redirect('login');
            
        $updatedAtMax = Remedies::max('updated');


        $countExtractions = Remedies::where('updated', $updatedAtMax)
            ->groupBy(['url'])
            ->selectRaw('COUNT(*) as count, url')
            ->get();

        
        $timeSeriesExtraction = Remedies::groupBy(['updated'])
            ->selectRaw('COUNT(*) as count, updated')
            ->get();

        $countTotal = $this->countTotal($countExtractions);
        list($urlsList, $valuesList) = $this->countExtractionsToArray($countExtractions);


        return view('statistics', compact(
            'urlsList',
            'valuesList',
            'timeSeriesExtraction',
            'countTotal'
            ));
        
    }

    private function countTotal($countExtractions){
        $sum = 0;

        foreach ($countExtractions as $item) {
            $sum += $item->count;
        }

        return $sum;
    }

    private function countExtractionsToArray($countExtractions){
        $urlsList = array();
        $valuesList = array();

        foreach ($countExtractions as $item) {
            array_push($urlsList, $item->url);
            array_push($valuesList, $item->count);
        }

        return [$urlsList, $valuesList];
    }

    
}