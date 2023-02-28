<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Resources\UserAddressResource;
use App\Models\City;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address =UserAddress::get();
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => UserAddressResource::collection($address),
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
        $address = UserAddress::create($request->all());
        return response([
            'status' => true,
            'message' => 'تم الحفظ بنجاح',
            'data' => new UserAddressResource($address)
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
        $address = UserAddress::find($id);
        $address->update($request->all());
        return response([
            'status' => true,
            'message' => 'تم الحفظ بنجاح',
            'data' => new UserAddressResource($address)
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
        $address = UserAddress::find($id);
        if ($address) {
            $address->delete();
            return response([
                'status' => true,
                'message' => 'تم الحذف بنجاح',
                'data' => null
            ]);
        }
        return response([
            'status' => true,
            'message' => 'لم يتم الحذف',
            'data' => null
        ]);
    }
}
