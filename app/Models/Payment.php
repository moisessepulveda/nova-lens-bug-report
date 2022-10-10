<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $casts = [
      'payment_date' => 'date:Y-m-d'
    ];


    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }


}
