<?php

    $host = '0.0.0.0';
    $port = 9501;
    $model = 'tcp';
    $sock_type = '';
    $server = new swoole_server($host,$port,$model,$sock_type);
#    $model 默认是SWOOLE_PROCESS
#      $SOCK_type 默认是 SWOOLE_SOCK_TCP:

#   $event l类型
# connect   $serv $fd
# receive
# close,了解默认的参数配置
    $server->on('connect',function($serv,$fd){
        echo '建立所有的链接';
    });







 ?>