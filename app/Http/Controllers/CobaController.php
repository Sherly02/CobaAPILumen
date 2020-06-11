<?php

namespace App\Http\Controllers;

use App\Coba;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class CobaController extends BaseController
{
     public function index(Request $request){
        try{
            $dataUser = Coba::query();
            if ($request->select){
                $data = explode(',',$request->select);
                $dataUser->select($data);
            }else{
                $dataUser->select('*');
            }
            if ($request->limit) $dataUser->limit($request->limit);

            $response['data'] = $dataUser->get();
            $response['select'] = $request->select ?? null;
            $response['limit'] = $request->limit ?? null;
            $response['status'] = 200;
        }catch(\Exception $e){
            if ($e instanceof QueryException){
                $response['status'] = 422;
                $response['message'] = 'error';
            }else{
                $response['status'] = 500;
                $response['message'] = $e->getMessage();
            }
        }
        return response()->json($response,$response['status']);
    }
}
