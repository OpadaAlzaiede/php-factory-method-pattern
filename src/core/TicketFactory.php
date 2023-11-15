<?php

class TicketFactory
{
    public function build(string $ticketType, array $properties = []): ?Ticket {

        return match($ticketType) {

            TicketType::Bus->name => new BusTicket(...$properties),
            TicketType::Plane->name => new PlaneTicket(...$properties),
            TicketType::Train->name => new TrainTicket(...$properties),
            default => null
        };
    }
}
