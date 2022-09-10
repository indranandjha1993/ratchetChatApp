<?php

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use ChatApp\Chat;
use Ratchet\WebSocket\WsServer;


require 'vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);

$server->run();;