<?php

// namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

// class Controller extends BaseController
// {
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//     log = $logfile(login);
// }


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function someFunction() {
        // 例えば、ログファイルを開く、またはログを記録するための処理
        $logfile = $this->openLogFile(); // openLogFile() はログファイルを開くメソッドの仮想例です
        $log = $logfile->writeLog("login"); // writeLog() はログに書き込むメソッドの仮想例です

        // または、シンプルに変数に値を代入する場合
        $log = "login"; // 変数 log に "login" を代入
    }

    // 仮に、ログファイルを開くメソッドが存在する場合
    protected function openLogFile() {
        // ログファイルを開く処理
        // return ログファイルオブジェクト;
    }
}
