<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    public function index()
    {
        return view('collab', [
            'collab' => Product::all(),
        ]);
    }
}
