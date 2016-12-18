<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTotal extends Model
{
    protected $table = "news_total";

    public $timestamps = false;

    protected $primaryKey = "news_id";

    protected $fillable = [
        "news_id","site_name","news_title",
        "news_cate", // 分類
        "news_content","news_file","news_update"
    ];
}
