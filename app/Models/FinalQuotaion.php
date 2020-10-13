<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalQuotaion extends Model
{
    // use HasFactory;

    public function inquiryFQuoRelationshi()
    {
        return $this->belongsTo(Inquiry::class);
    }
}
