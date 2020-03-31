<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class KongController extends Controller
{
    public function longStr(Request $request)
    {
        return $this->lengthOfLongestSubstring('abcabcbb');
    }

    public function lengthOfLongestSubstring($s) {
        $arr = str_split($s);
        $key = '';
        $subStr = '';
        for($i=0; $i<strlen($s);$i++) {
            $key = $arr[$i];
            $strIndex = stripos($subStr, $key);
 
            if ($strIndex !== false) {
                $subStr1 = substr($subStr, 0 , $strIndex);
                $subStr2 = substr($subStr, $strIndex+1);
                return $subStr1. '-' . $subStr2. '--' . $key. '()'. $strIndex;
                if (strlen($subStr1) > strlen($subStr2)) {
                    $subStr = $subStr1;
                } else {
                    $subStr = $subStr2;
                }
            } else {
                $subStr .= $key;
            }
        }
        return strlen($subStr);
    }

    public function name1()
    {

    }

    public function name2()
    {

    }

    public function name3()
    {

    }

    public function name4()
    {

    }

    public function name5()
    {

    }

}
