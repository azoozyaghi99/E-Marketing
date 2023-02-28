<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\FeedBackRequest;
use App\Models\City;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FeedBack::create($request->all());
        return response([
            'status' => true,
            'message' => 'تم الاضافة التعليق بنجاح',
            'data' => null
        ]);
    }
}
