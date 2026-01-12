<?php

namespace App\Enums;

enum TransactionType: string
{
    case Debit = 'Debit';
    case Credit = 'Credit';
}
