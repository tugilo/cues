<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebTWebJuchuDetail extends Model
{
    protected $table = 'web_t_web_juchu_detail';
    protected $fillable = [
        'web_juchu_id',
        'web_juchu_detail_no',
        'syouhin_cd',
        'syohin_tanka_cd',
        'suryou',
        'hatsou_syouhin_flg',
        'tmstamp',
    ];
    public $timestamps = false;
}
