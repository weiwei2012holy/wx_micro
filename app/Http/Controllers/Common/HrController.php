<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HrController extends Controller
{
    //
    public function save(Request $request)
    {
        print_r($request->input('a'));
    }
}
