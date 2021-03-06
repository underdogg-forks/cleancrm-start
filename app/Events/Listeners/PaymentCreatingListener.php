<?php

namespace IP\Events\Listeners;

use IP\Events\PaymentCreating;

class PaymentCreatingListener
{
    public function handle(PaymentCreating $event)
    {
        $payment = $event->payment;

        if (!$payment->paid_at) {
            $payment->paid_at = date('Y-m-d');
        }
    }
}
