<?php

namespace App\Http\Controllers;

use Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view('stock.index');
    }
}
