<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = "administrator";

    public $timestamps = false;

    protected $primarykey = "site_id";

    protected $fillable = [
        'user',
        'password',
        'administratorName',
        'position',
        'phone',
        'email',
        'authority',
        'adminschool_phone',

    ];

    protected $hidden = [
        'password'
    ];
}
