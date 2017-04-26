<?php

namespace App\Http\Controllers;

use App\Mail\StockGreatherMax;
use App\Product;
use App\StockEntry;
use Illuminate\Http\Request;

class StockEntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = StockEntry::all();
        return view('stock-entries.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->pluck('name', 'id');
        return view('stock-entries.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array_except($request->all(), '_token');
        StockEntry::forceCreate($data);
        return redirect()->route('stock_entries.index');
    }
}
