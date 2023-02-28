<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
        $orders = $orders->paginate(10);
        return view('orders.index',compact('orders'));
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
        $order_products = $order->orderProducts()->paginate(10);
        return view('order.show',['order'=>$order]);
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
        if ($request->order_status == 'accept')
            $status = $order->status + 1;
        else
            $status = Order::ORDERREJECT;
        $order-> status= $status;
        $order->save();
        return redirect()->route('order.index');
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
        return redirect()->route('order.index');
    }
}
