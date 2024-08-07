<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;

class UpdateSyouhinStatus extends Command
{
    protected $signature = 'syouhin:update-status';
    protected $description = 'Update the status of syouhin based on the open and close dates';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();

        // 状態を「1.オープン中」に更新する
        DB::table('web_m_syouhin_syubetu')
            ->where('site_status', 0)
            ->where('syouhin_syubetu_open_dt', '<=', $now)
            ->where('syouhin_syubetu_close_dt', '>=', $now)
            ->update(['site_status' => 1]);

        // 状態を「2.クローズ」に更新する
        DB::table('web_m_syouhin_syubetu')
            ->where('site_status', 1)
            ->where('syouhin_syubetu_close_dt', '<', $now)
            ->update(['site_status' => 2]);

        $this->info('Syouhin statuses have been updated.');
    }
}