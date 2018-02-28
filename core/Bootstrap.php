<?php
namespace  core;

class  Bootstrap{
    public static function run(){
self::parseurl();
    }

    public static function parseurl(){
      // dd($_SERVER['QUERY_STRING']);

        if($_SERVER['QUERY_STRING']){
            $arr=explode('&',$_SERVER['QUERY_STRING']);
            $arrc=explode('=',$arr[0]);
            $arra=explode('=',$arr[1]);
            $class=  '\web\controller\\'.$arrc[1];
            $action=  $arra[1];

        }
        else{
            $class=  '\web\controller\Index';
            $action=  'index';
        }

        $obj=new $class;
        $obj->$action();
    }
}


?>