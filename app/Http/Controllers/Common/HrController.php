<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HrController extends Controller
{

    public function index(Request $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->get('data');
            $data = array_combine(array_column($data, 'name'), array_column($data, 'value'));
            unset($data['_token']);
            $data['created'] = time();
            if (count(array_filter($data)) != count($data)){
                return response()->json(['ok' => 0, 'msg' => '请完善信息~~']);
            }
            $has_one = DB::table('mokin_job')->where('mobile', $data['mobile'])->count();
            if ($has_one) {
                $res = ['ok' => 0, 'msg' => '该手机号码已经申请,请等待客服联系~~'];
            } else {
                $save_info = DB::table('mokin_job')->insert($data);
                if ($save_info) {
                    $res = ['ok' => 1, 'msg' => '申请成功,请等待客服联系~~'];
                } else {
                    $res = ['ok' => 0, 'msg' => '申请失败,请重新操作'];
                }
            }
            return response()->json($res);

        } else {
            $data['province'] = DB::table('area')->where('level', 0)->get();
            return view('hr', $data);
        }

    }

    /**
     * 获取地区
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getArea($id)
    {
        return response()->json(['area' => DB::table('area')->where('parent_id', $id)->get()]);
    }
}
