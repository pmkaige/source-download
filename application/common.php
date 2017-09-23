<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function jsSzie($size){
	$sizeKB=round($size/1024,2); 
    $_size=$sizeKB.' KB';
    if($sizeKB>1024){
        $sizeMB=round($sizeKB/1024,1);
        $_size=$sizeMB.' MB';
        if($sizeMB>1024){
        $sizeGB=round($sizeMB/1024,0);
        $_size=$sizeGB.' GB';
    	}
    }

    return $_size;
}

/**
 * 获取用户真实 IP
 */
function getIP()
{
    static $realip;
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    return $realip;
}

/**
 * 获取 IP  地理位置
 * 淘宝IP接口
 * @Return: array
 */
function getCity($ip = '')
{
    if($ip == ''){
        $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";
        $ip=json_decode(file_get_contents($url),true);
        $data = $ip;
    }else{
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
        $ip=json_decode(file_get_contents($url));   
        if((string)$ip->code=='1'){
           return false;
        }
        $data = (array)$ip->data;
    }
    
    $position=$data['region'].' '.$data['city'];   
    return $position;
}

//本月第一天和最后一天
// $firstday是月份的第一天，假如$date是2014-2这样的话，$firstday就会是2014-02-01，然后根据$firstday加一个月就是2014-03-01，再减一天就是2014-02-28，用date()和strtotime()真是太方便了。

function getMonth($date){
     $firstday = date("Y-m-01",strtotime($date));
     $lastday = date("Y-m-d",strtotime("$firstday +1 month -1 day"));
     return array($firstday,$lastday);
 }

 // 上个月第一天和最后一天
// 上月日期需要先获取一个时间戳，然后在月份上-1就OK了，超智能的date()会把2014-0-1这种东西转换成2013-12-01，太爽了。
 function getlastMonthDays($date){
     $timestamp=strtotime($date);
     $firstday=date('Y-m-01',strtotime(date('Y',$timestamp).'-'.(date('m',$timestamp)-1).'-01'));
     $lastday=date('Y-m-d',strtotime("$firstday +1 month -1 day"));
     return array($firstday,$lastday);
 }
