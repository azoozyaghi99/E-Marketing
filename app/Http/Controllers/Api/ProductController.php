<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => ProductResource::collection($products),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product){
            return response([
                'status' => true,
                'message' => 'تم الحفظ بنجاح',
                'data' => new ProductResource($product)
            ]);
        }
        return response([
            'status' => false,
            'error' => 'لا يوجد منتجات',
            'data' => null
        ]);
    }
}
