<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebMSyouhin extends Model
{
    protected $table = 'web_m_syouhin';
    protected $fillable = [
        'config_id',
        'syouhin_syubetu',
        'hatsou_syouhin_flg',
        'web_syouhin_nm',
        'web_syouhin_hosoku',
        'web_syouhin_siyou',
        'web_syouhin_note',
        'web_suuryou_note',
        'web_syouhin_image1',
        'web_syouhin_image2',
        'web_syouhin_image3',
        'web_disp_flg',
        'sakusei_tp',
        'sakusei_tanto_cd',
        'koushin_tp',
        'koushin_tanto_cd',
        'tmstamp',
    ];
}
