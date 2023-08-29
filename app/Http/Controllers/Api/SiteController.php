<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioModel;

class SiteController extends Controller
{
    public function index(){

        $sites = PortfolioModel::all();
        return response()->json([
            'success' => true,
            'results' => $sites,
        ]);
    }
}
