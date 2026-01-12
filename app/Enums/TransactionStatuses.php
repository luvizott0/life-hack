<?php

namespace App\Enums;

enum TransactionStatuses: string
{
    case Pending = 'Pending';
    case Paid = 'Paid';
}
