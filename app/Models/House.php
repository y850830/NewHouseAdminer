<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resident;
use App\Models\HouseAdmin;
class House extends Model
{
    protected $table = 'house';

    public $timestamps = false;

    protected $primaryKey = 'houseId';

    protected $fillable = [
        'houseId',	       // 房子流水編號
        'HouseNickname',   // 房屋暱稱
        'regionId',	       // 區域號碼
        'address',	       // 租屋地址
        'lease',	       // 租約
        'rental',		   // 租金
        'rentalY',		   // 雅房租金
        'deposit',		   // 押金
        'expense',	       // 其他費用
        'stairs',		   // 樓
        'layer',	       // 層
        'area',	           // 坪
        'material',		   // 建材
        'ammeter',		   // 獨立電表
        'type',	 	       // 房間規格
        'nosmok',	       // 無煙住所
        'roomAll',	 	   // 套房總數
        'roomNum',	       // 套房剩餘數量
        'roomArea',	 	   // 套房大小
        'roomYArea',	   //雅房大小
        'roomYAll',	 	   // 雅房總數
        'roomYNum',	 	   // 雅房剩餘
        'limit',		   // 限制
        'other',		   // 備註欄
        'postDate',		   // 刊登日期
        'editDate',		   // 編輯日期
        'counter',	 	   // 計數器
        'user_Id',		   // 房東管理帳號
        'site_name',       // 學校英文縮寫
        'active'           // 使用中 1: 是，0: 否
    ];

    public function residents(){
        // 第二個參數是外鍵，話說好像相同的時候，可以不用設？
        return $this->hasMany(Resident::class,'houseId');
    }

    // 每個房子擁有一個聯絡人
    public function houseadmin(){
        return $this->hasOne(HouseAdmin::class,'houseId');
    }
}
