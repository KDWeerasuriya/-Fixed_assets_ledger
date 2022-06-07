<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FixedLedgerAccount extends Model
{
    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }

    public function categoryName()
    {
        return $this->belongsTo(CategoryName::class);
    }
}
