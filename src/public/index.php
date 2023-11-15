<?php

declare(strict_types=1);

define("BASE_PATH", __DIR__ . "/../");

spl_autoload_register(function($class) {

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    require_once BASE_PATH . "core/" . $class . ".php";
});

$ticketType = "Plane";
$ticketPrice = 99.5;
$seatNumber = '11';

$ticket = (new TicketFactory())->build($ticketType, ['price' => $ticketPrice, 'seatNumber' => $seatNumber]);





