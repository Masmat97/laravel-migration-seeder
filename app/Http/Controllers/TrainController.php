<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
     public function index()
    {
        $today = Carbon::today()->toDateString();
        $trains = Train::whereDate('orario_di_partenza', $today)->get();
        return view('home', compact('trains'));
    }
}
