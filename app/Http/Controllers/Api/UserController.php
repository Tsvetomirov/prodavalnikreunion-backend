<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {

        $data = User::all();
        return response()->json(['data'=>$data],200);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function limitRecords($limit)
    {
        $data = User::take($limit)->get();

        return response()->json(['data'=>$data],200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function onlyColumn($column)
    {
        $data = User::all()->pluck($column);

        return response()->json(['data'=>$data],200);
    }

    /**
     * @param Request $request
     */
    public function allRelations(Request $request)
    {

    }
}
