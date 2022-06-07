<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    public function fixedLedgerAccount()
    {
        return $this->hasOne(FixedLedgerAccount::class);
    }
}
