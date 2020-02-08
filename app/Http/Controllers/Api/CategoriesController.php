<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {

        $data = Category::all();
        return response()->json(['data'=>$data],200);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function limitRecords($limit)
    {
        $data = Category::take($limit)->get();

        return response()->json(['data'=>$data],200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function onlyColumn($column)
    {
        $data = Category::all()->pluck($column);

        return response()->json(['data'=>$data],200);
    }

    /**
     * @param Request $request
     */
    public function allRelations(Request $request)
    {

    }
}
