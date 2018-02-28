<?php
/**
 * Desc:
 * User: 余伟<weiwei2012holy@hotmail.com>
 * DateTime: 2018/2/28 下午5:38
 */

namespace App\Extensions;

use Illuminate\Http\Request;


trait AuthenticatesLogout
{
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->forget($this->guard()->getName());

        $request->session()->regenerate();

        return redirect('/');
    }
}