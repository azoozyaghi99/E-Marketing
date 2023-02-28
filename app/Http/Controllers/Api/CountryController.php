<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries =Country::get();
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => CountryResource::collection($countries),
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
        $country = Country::find($id);
        if ($country){
            return response([
                'status' => true,
                'message' => 'تم الحفظ بنجاح',
                'data' => new CountryResource($country)
            ]);
        }
        return response([
            'status' => false,
            'error' => 'لا يوجد دول',
            'data' => null
        ]);
    }
}
