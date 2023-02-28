<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Resources\CartResource;
use App\Http\Resources\CategoryResource;
use App\Models\Cart;
use App\Models\CartProduct;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = auth()->user()->carts()->latest()->first();
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => new CartResource($cart),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = auth()->user()->carts()->latest()->first();
        if (!$cart) {
            $cart = auth()->user()->carts()->create(['total'=>0]);
        }
        foreach ($request->products as $product){
            $cart_product = new CartProduct();
            $cart_product->cart_id = auth('api')->id();
            $cart_product->product_id = $product['id'];
            $cart_product->qty = $product['qty'];
            $cart_product->notes = $product['notes'];
            $cart_product->save();
        }
        return response([
            'status' => true,
            'message' => 'تم الحفظ بنجاح',
            'data' => new CartResource($cart)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart_product = CartProduct::find($id);
        if (!$cart_product) {
            return response([
                'status' => false,
                'error' => 'المنتج غير موجود بالسلة',
                'data' => null
            ]);
        }
        $cart_product->qty = $request->qty;
        $cart_product->save();
        $cart = auth()->user()->carts()->where('id',$cart_product->cart_id)->first();
        return response([
            'status' => true,
            'message' => 'تم الحفظ بنجاح',
            'data' => new CartResource($cart)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart_product = CartProduct::find($id);
        if (!$cart_product) {
            return response([
                'status' => false,
                'error' => 'المنتج غير موجود بالسلة',
                'data' => null
            ]);
        }
        $cart_product->delete();
        $cart = auth()->user()->carts()->where('id',$cart_product->cart_id)->first();
        return response([
            'status' => true,
            'message' => 'تم الحذف بنجاح',
            'data' => new CartResource($cart)
        ]);
    }
}
