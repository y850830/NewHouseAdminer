<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $table = 'resident';

    public $timestamps = false;

    protected $primaryKey = 'resident_id';

    protected $fillable = [
        'resident_id',  // 居住人編號
        'houseId',      // 房屋編號
        'postdate',     // 張貼日期
        'site_name',    // 學校
        'editdate',     // 編輯日期
        'resident_name',// 居住人名字
        'resident_sid', //
        'resident_mobile',  // 居住人手機
        'roomN',        // 房間編號
        'comment'       // 註解
    ];
}
