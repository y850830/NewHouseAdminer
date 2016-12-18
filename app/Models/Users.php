<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\House;
class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    public $timestamps = false;

    protected $primaryKey = 'user_Id';

    protected $fillable = [
        'site_name',
        'user_Id',
        'user_name',
        'user_account',
        'user_email',
        'user_password',
        'user_phone',
        'user_regTime'
    ];

    protected $hidden = [
        'user_password','user_regTime'
    ];

    public function houses(){
        // 預設用 primaryKey去對到 Foreign Key
        // 第二個參數是 Foreign Key
        return $this->hasMany(House::class,'user_Id');
    }
}
