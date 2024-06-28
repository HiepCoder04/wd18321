<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $listProduct = [
            [
                'id' => '1',
                'name' => 'iphone12'
            ],
            [
                'id' => '2',
                'name' => 'iphone13'
            ]
            ];
        return view('list-product')->with([
            'abc' => $listProduct
        ]);
    }
    public function getProduct($id,$name = ''){
        echo $id;
        echo $name;

    }
    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;

    }
}
