<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NewsTotal;

class NewsCateg extends Model
{
    protected $table ="news_categ";

    public $timestamps = false;

    protected $primaryKey = "Newscateg_id";

    // 0:一般公告   1:學生    2:房東    3：重要
    protected $fillable = [
        "Newscateg_id","Newscateg_name"
    ];

    public function news(){
        return $this->hasMany(NewsTotal::class,'news_cate','Newscateg_id');
    }

}
