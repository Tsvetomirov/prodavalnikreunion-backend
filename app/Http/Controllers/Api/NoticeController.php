<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {

        $data = Notice::all();
        return response()->json(['data'=>$data],200);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function limitRecords($limit)
    {
        $data = Notice::take($limit)->get();

        return response()->json(['data'=>$data],200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function onlyColumn($column)
    {
        $data = Notice::all()->pluck($column);

        return response()->json(['data'=>$data],200);
    }

    /**
     * @param Request $request
     */
    public function allRelations(Request $request)
    {

    }
}
