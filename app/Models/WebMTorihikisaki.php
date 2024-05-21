<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebMTorihikisaki extends Model
{
    protected $table = 'web_m_torihikisaki';
    public $timestamps = false;
    protected $fillable = [
        'access_record_kbn',
        'web_record_kbn',
        'torihikisaki_cd',
        'system_year',
        'shisya_cd',
        'torihikisaki_nm',
        'torihikisaki_kana',
        'gaiji_flg',
        'syokui_cd',
        'torihikisaki_tantosya_telno',
        'torihikisaki_tantosya_email',
        'torihikisaki_web_password',
        'urltoken',
        'shisya_henkou_flag',
        'shisya_henkou_dt',
        'siharaihou_cd',
        'delete_flg',
        'sakusei_tp',
        'sakusei_tanto_cd',
        'koushin_tp',
        'koushin_tanto_cd',
        'taisyoku_flg',
        'guidebook_flg',
        'guidebook_tp',
        'tmstamp',
        'lp_cd',
        're_password_flag',
    ];
    protected $dates = [
        'shisya_henkou_dt',
        'sakusei_tp',
        'koushin_tp',
    ];

}
