<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = "sites";

    public $timestamps = false;

    protected $primarykey = "sites_id";

    protected $fillable =[
        "site_name","site_title","site_address","site_admin","site_email","site_active","site_allowre"
    ];
}
