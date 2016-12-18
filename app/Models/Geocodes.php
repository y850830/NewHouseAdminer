<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geocodes extends Model
{
    protected $table = "geocodes";

    public $timestamps = false;

    protected $primarykey = "address";

    protected $fillable =[
        "address","lon","lat","Gaction"
    ];
}
