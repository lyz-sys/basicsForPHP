<?php

namespace learn\src;

class SwooleDemo
{
    private string $host;

    private int $port;

    /**
     * @param string $host
     * @return SwooleDemo
     */
    public function setHost(string $host): SwooleDemo
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @param int $port
     * @return SwooleDemo
     */
    public function setPort(int $port): SwooleDemo
    {
        $this->port = $port;
        return $this;
    }

    public function tcp()
    {
        $server = new \Swoole\Server($this->host, $this->port);

        //监听连接进入事件
        $server->on('Connect', function ($server, $fd) {
            echo "Client: Connect.\n";
        });

        //监听数据接收事件
        $server->on('Receive', function ($server, $fd, $reactor_id, $data) {
            $server->send($fd, "Server: {$data}");
        });

        //监听连接关闭事件
        $server->on('Close', function ($server, $fd) {
            echo "Client: Close.\n";
        });

        //启动服务器
        $server->start();
    }

    public function udp()
    {
        $server = new \Swoole\Server($this->host, $this->port, SWOOLE_PROCESS, SWOOLE_SOCK_UDP);

        //监听数据接收事件
        $server->on('Packet', function ($server, $data, $clientInfo) {
            var_dump($clientInfo);
            $server->sendto($clientInfo['address'], $clientInfo['port'], "Server：{$data}");
        });

        //启动服务器
        $server->start();
    }

    public function http()
    {
        $http = new \Swoole\Http\Server($this->host, $this->port);

        $http->on('Request', function ($request, $response) {
            if ($request->server['path_info'] === '/favicon.ico' || $request->server['request_uri'] === '/favicon.ico') {
                $response->end();
                return;
            }
            [$controller, $action] = explode('/', trim($request->server['request_uri'], '/'));
            //根据 $controller, $action 映射到不同的控制器类和方法
            $response->header('Content-Type', 'text/html; charset=utf-8');
            try {
                $controller = '\learn\src\\' . $controller;
                $response->end((new $controller)->$action($request, $response));
            } catch (\Exception $exception) {
                $response->end('error');
                var_dump($exception->getMessage());
            }
        });

        $http->start();
    }

    public function websocket()
    {
        $ws = new \Swoole\WebSocket\Server($this->host, $this->port);

        //监听WebSocket连接打开事件
        $ws->on('Open', function ($ws, $request) {
            $ws->push($request->fd, "hello, welcome\n");
        });

        //监听WebSocket消息事件
        $ws->on('Message', function ($ws, $frame) {
            echo "Message: {$frame->data}\n";
            $ws->push($frame->fd, "server: {$frame->data}");
        });

        //监听WebSocket连接关闭事件
        $ws->on('Close', function ($ws, $fd) {
            echo "client-{$fd} is closed\n";
        });

        $ws->start();
    }

}
