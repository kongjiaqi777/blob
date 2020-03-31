<?php

namespace App\Imports;

use App\Bill;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class UsersImport implements ToModel
{
    public function model(array $row)
    {
        // 支付宝官方导出Excel账单  
        // return new Bill([
        //     'bill_type'     => $row[1],
        //     'trade_user'    => $this->removeEmoji($row[7]), 
        //     'goods'         => $this->removeEmoji($row[8]),
        //     'trade_type'    => $row[10],
        //     'amount'        => $row[9],
        //     'pay_way'       => $row[6],
        //     'status'        => $row[11],
        //     'trade_code'    => $row[1],
        //     'order_code'    => $row[0],
        //     'comment'       => $this->removeEmoji($row[5]),
        //     'bill_time'     => $row[2],
        //     'created_at'    => Carbon::now()->toDateTimeString(),
        //     'updated_at'    => Carbon::now()->toDateTimeString(),
        //     'source'        => '支付宝'
        // ]);
        // 微信官方导出Excel账单  
        return new Bill([
            'bill_type'     => $row[1],
            'trade_user'    => $this->removeEmoji($row[2]), 
            'goods'         => $this->removeEmoji($row[3]),
            'trade_type'    => $row[4],
            'amount'        => substr($row[5], 2),
            'pay_way'       => $row[6],
            'status'        => $row[7],
            'trade_code'    => $row[8],
            'order_code'    => $row[9],
            'comment'       => $this->removeEmoji($row[10]),
            'bill_time'     => $row[0],
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
            'source'        => '微信'
        ]);
    }

    public function Array(Array $tables)
    {
        return $tables;
    }

    public function removeEmoji($nickname) {
        $clean_text = "";
        // Match Emoticons
        $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
        $clean_text = preg_replace($regexEmoticons, '', $nickname);
        // Match Miscellaneous Symbols and Pictographs
        $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
        $clean_text = preg_replace($regexSymbols, '', $clean_text);
        // Match Transport And Map Symbols
        $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
        $clean_text = preg_replace($regexTransport, '', $clean_text);
        // Match Miscellaneous Symbols
        $regexMisc = '/[\x{2600}-\x{26FF}]/u';
        $clean_text = preg_replace($regexMisc, '', $clean_text);
        // Match Dingbats
        $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
        $clean_text = preg_replace($regexDingbats, '', $clean_text);
        return $clean_text;
      }
}
