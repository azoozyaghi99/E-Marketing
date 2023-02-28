<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Category::get();
        return response([
            'status' => true,
            'message' => 'تم جلب البيانات بنجاح',
            'data' => CategoryResource::collection($categories),
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
        $category = Category::find($id);
        if ($category){
            return response([
                'status' => true,
                'message' => 'تم الحفظ بنجاح',
                'data' => new CategoryResource($category)
            ]);
        }
        return response([
            'status' => false,
            'error' => 'لا يوجد تصنيفات',
            'data' => null
        ]);
    }
}
