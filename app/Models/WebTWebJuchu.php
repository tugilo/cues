<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebTWebJuchu extends Model
{
    protected $table = 'web_t_web_juchu';
    protected $fillable = [
        'juchu_id',
        'import_kbn',
        'web_m_torihikisaki_id',
        'import_torihikisaki_kbn',
        'web_juchu_dt',
        'doukonbutu_kbn1',
        'doukonbutu_kbn2',
        'doukonbutu_kbn3',
        'system_year',
        'remote_address',
        'remote_host',
        'remote_port',
        'http_user_agent',
        'http_referer',
        'http_accept_language',
        'http_connection',
        'bikou',
        'sakusei_tp',
        'sakusei_tanto_cd',
        'koushin_tp',
        'koushin_tanto_cd',
        'tmstamp',
    ];
    public $timestamps = false;
}
