<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::query();
        if ($request->order_status == 'new')
            $orders = $orders->where('status',Order::ORDERNEW);
        elseif ($request->order_status == 'accept')
            $orders = $orders->where('status',Order::ORDERACCEPT);
        elseif ($request->order_status == 'driver')
            $orders = $orders->where('status',Order::ORDERDRIVER);
        elseif ($request->order_status == 'complete')
            $orders = $orders->where('status',Order::ORDERCOMPLETE);
        else
            $orders = $orders->where('status',Order::ORDERREJECT);
        $orders = $orders->get();
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => OrderResource::collection($orders),
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
        $order = Order::create($request->all());
        foreach ($request->products as $product){
            $order_product = new CartProduct();
            $order_product->order_id = $order->id;
            $order_product->product_id = $product['id'];
            $order_product->price = $product['price'];
            $order_product->qty = $product['qty'];
            $order_product->notes = $product['notes'];
            $order_product->save();
        }
        return response([
            'status' => true,
            'message' => 'تم الحفظ بنجاح',
            'data' => new OrderResource($order)
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
        $order = Order::find($id);
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => new OrderResource($order),
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
        $order = Order::find($id);
        if ($request->order_status == 'reject')
            $status = Order::ORDERREJECT;
        else
            $status = $order->status + 1;
        $order-> status= $status;
        $order->save();
        return response([
            'status' => true,
            'message' => 'تم تغيير حالة الطلب بنجاح',
            'data' => new OrderResource($order),
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
        $order = Order::find($id);
        $order-> delete();
        return response([
            'status' => true,
            'message' => 'تم حذف الطلب بنجاح',
            'data' => null,
        ]);
    }
}
