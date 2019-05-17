<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{

  public function productShow($id)
  {
    $data=['id'=>$id];
    // $products=Category::with('attributes')->where('id', $id)->orWhere('slug', $id)->first();
    //$data=Product::with('attributes')->where('id', $id)->orWhere('sku', $id)->first();
  //  $data=Product::with('attributes')->where('sku', $id)->first();

//dd($data->attributes);

    return view('collection.product')->with('product', $data);
  }
}
