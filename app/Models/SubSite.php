<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSite extends Model
{
    protected $table = "subsites";

    public $timestamps = false;

    protected $primarykey = "subsites_ID";

    protected $fillable =[
        "site_name","subsite_title","subsite_address","subsite_phone","subsite_descript"
    ];
}
