<?php

namespace App\Test;
use Tests\TestCase;
use App\Models\Order;
use App\Events\OrderCreated;
use App\Listeners\SendNotificationToManager;


class OrderTest extends TestCase
{
    public function testOrderCreatedEvent()
    {
        $this->withoutExceptionHandling();

        // Sukuriamas užsakymas
        $orderData = [
            'customer_name' => 'John Doe',
            'customer_email' => 'john@example.com',
            'product_name' => 'Test product',
            'price' => 10.99
        ];

        $this->post(route('orders.store'), $orderData);

        $order = Order::latest()->first();

        // Patikriname, ar buvo iškvietas OrderCreated event'as su teisingu užsakymo objektu
        Event::assertDispatched(OrderCreated::class, function ($event) use ($order) {
            return $event->getOrder()->id === $order->id;
        });

        // Patikriname, ar buvo iškvietas SendNotificationToManager event'o listeneris
        Event::assertDispatched(OrderCreated::class, function ($event) {
            return SendNotificationToManager::class === get_class($event->listeners()[0]);
        });
    }
}


