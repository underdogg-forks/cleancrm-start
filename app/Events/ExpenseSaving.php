<?php

namespace IP\Events;

use Illuminate\Queue\SerializesModels;
use IP\Modules\Expenses\Models\Expense;

class ExpenseSaving extends Event
{
    use SerializesModels;

    public function __construct(Expense $expense)
    {
        $this->expense = $expense;
    }
}