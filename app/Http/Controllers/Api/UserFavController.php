<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Resources\FavResource;
use App\Models\City;
use App\Models\UserFav;
use Illuminate\Http\Request;

class UserFavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favs = auth('api')->user()->userFavs;
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => FavResource::collection($favs),
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
        $favs = auth('api')->user()->userFavs()->where('product_id',$request->product_id)->first();
        if ($favs) {
            $favs->delete();
            return response([
                'status' => true,
                'message' => 'تم الازالة من المفضلة بنجاح',
                'data' => null
            ]);
        }else {
            $favs = auth('api')->user()->userFavs()->create($request->only('product_id'));
            return response([
                'status' => true,
                'message' => 'تم الاضافة الي المفضلة بنجاح',
                'data' => new FavResource($favs)
            ]);
        }
    }
}
