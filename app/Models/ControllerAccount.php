<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControllerAccount extends Model
{
    public function categoryName()
    {
        return $this->belongsTo(CategoryName::class);
    }
}
