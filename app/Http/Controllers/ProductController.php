<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
            return view('Product')
                ->with('Movie1, The Greatest Show')
                ->with('Movie2, KungFu Panda')
                ->with('Movie3, The Amazing Spiderman')
                ->with('Movie4, Into The Woods')
                ->with('Movie5, The Internship');
            
    }
}
?>
