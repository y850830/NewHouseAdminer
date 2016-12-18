<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\House;
use App\Models\Region;
use App\Models\SubSite;
use App\models\Site;
use App\models\Geocodes;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($school)
    {
        $geocodes = array();
        $houses = House::where(['site_name' => $school, 'active' => 1])->orderBy('houseId','ASC')->get(); //租屋資訊
        $site = Site::where('site_name',$school)->get();
        foreach($houses as $item){
            $geocodes[] =  Geocodes::where('address',$item->address)->select('lat','lon')->get();//房屋經緯度
        }       
        $regions = Region::where('site_name',$school)->get(); // 區域 XX里、YY里
        $subsites = SubSite::where('site_name',$school)->get(); // 校區 !只做地圖中心的轉移
        $houses_total = count($houses);
        $houses_empty_room =  $houses->sum('roomNum') + $houses->sum('roomYNum');

        return view('pages.house' , [
            'school' => $school,
            'houses' => $houses,
            'regions' => $regions,
            'site'=>$site,
            'geocodes' => $geocodes,
            'subsites' => $subsites,
            'houses_total' => $houses_total,
            'houses_empty_room' => $houses_empty_room
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
