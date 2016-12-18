<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use App\Models\Users;

class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * 這是用於房客資訊 uses->userId => house->houseId 取出房東擁有的房子 => resident->取出房客 & houseadmin->該房子的聯絡人
         */
        return view('pages.landlord');
    }

    public function fixPassword(Request $request){
        // 密碼確認及重複性在前端以驗證完畢，因此這裡只需做更改及確認舊密碼是否為真

        if(MD5($request->old_password) != Auth::user()->user_password)
            return redirect()->back()->with('status','0');

        Auth::user()->update(['user_password' => MD5($request->new_password)]);
        return redirect()->back()->with('status','1');
    }
}
