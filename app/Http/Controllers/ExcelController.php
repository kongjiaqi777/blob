<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExcelController extends Controller 
{
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        // 导出array
        // $array = Excel::toArray(new UsersImport, '/home/vagrant/code/blog/storage/excel/alipay_bill.csv');

        // 插入Model-alipay
        // Excel::import(new UsersImport, '/home/vagrant/code/blog/storage/excel/alipay_bill.csv');

        // 插入Model-wechatpay
        for ($i=1; $i<5;$i++) {
            Excel::import(new UsersImport, '/home/vagrant/code/blog/storage/excel/bill'.$i.'.csv');
        }
        return 'success';
    }
}
