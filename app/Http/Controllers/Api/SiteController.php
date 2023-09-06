<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioModel;
//use App\Models\Types;
//use App\Models\Technology;

class SiteController extends Controller
{
    public function index(){

        $sites = PortfolioModel::with('type', 'technologies')->paginate(6);
       
        return response()->json([
            'success'=>true,
            'results'=>$sites,
        ]);
    }
}
