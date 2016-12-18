<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseAdmin extends Model
{
    protected $table = 'houseadmin';

    public $timestamps = false;

    protected $primarykey = 'houseId';

    protected $fillable = [
        'houseId',
        'adminName',
        'adminSex',
        'adminTelephone',
        'adminCellphone',
        'adminEmail',
        'adminLine',
        'relation'
    ];


}
