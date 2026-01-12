<?php

namespace App\Enums;

enum TransactionTypes: string
{
    case Debit = 'Debit';
    case Credit = 'Credit';

    public function getColor(): string
    {
        return match ($this) {
            self::Debit => 'red',
            self::Credit => 'green',
        };
    }
}
