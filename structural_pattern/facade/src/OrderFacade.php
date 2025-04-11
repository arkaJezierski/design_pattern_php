<?php

namespace App\Src;

class OrderFacade
{
    public function __construct(
        private PaymentService $payment,
        private ShippingService $shipping,
        private NotificationService $notification
    ) {}

    public function placeOrder(float $amount, string $address, string $email): void
    {
        $this->payment->pay($amount);
        $this->shipping->ship($address);
        $this->notification->sendConfirmation($email);
    }
}
