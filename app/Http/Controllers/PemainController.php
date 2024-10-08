<?php

namespace App\Http\Controllers;
use App\Models\pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $data_pemain = pemain::all();
        $sum = pemain::sum('no_punggung');
        $total = pemain::count();

        return view('index', compact('data_pemain', 'sum', 'total'));
    }
}