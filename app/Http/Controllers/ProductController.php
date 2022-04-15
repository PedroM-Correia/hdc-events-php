<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index($id = null) {
    if ($id ==null) {
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    } else {
        return view('product', ['id' => $id]);
    }
    

   }


}
