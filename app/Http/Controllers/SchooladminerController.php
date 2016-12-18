<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Administrator;
use App\Models\Site;

class SchooladminerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = 0;
        // $check=false;
        $account = $request->input('admin_account');
        $passdata = Administrator::select('*')->where('user',$account)->first();
        // if(MD5($request->input('password')) == $passdata['password']){
                $school = Site::select('site_name')->where('site_id','1')->first();
                // Session::push('school',$school['site_name']);
        //     $check=true;
        // }
        // if($check){
            // return view('pages.schooladminer',['school'=>Session::get('school'),'status'=>$status]);
            return view('pages.schooladminer',['school'=>'NFU']);
        // }else{
        //     return view('schooladminerlogin.login');
        // }
    }

    public function login()
    {
        return view('schooladminer.login');
    }

    // public function fixPassword(Request $request){
    //     // 密碼確認及重複性在前端以驗證完畢，因此這裡只需做更改及確認舊密碼是否為真

    //     if(MD5($request->old_password) != Auth::user()->user_password)
    //         return redirect()->back()->with('status','0');

    //     Auth::user()->update(['user_password' => MD5($request->new_password)]);
    //     return redirect()->back()->with('status','1');
    // }
    public function show($page){
        // $status = 0;
        // $school = Site::select('site_name')->where('site_id','1')->first();
        // return view('schooladminer.show',['school'=>$school['site_name'],'status'=>$status]);
        return view('schooladminer.show',['school'=>'NFU','pages'=>$page]);
    } 
}
