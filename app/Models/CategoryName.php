<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryName extends Model
{
    public function controllerAccounts()
    {
        return $this->hasMany(ControllerAccount::class);
    }
    public function fixedLedgerAccount()
    {
        return $this->hasOne(FixedLedgerAccount::class);
    }
}
