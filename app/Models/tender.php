<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tender extends Model
{
    // use HasFactory;

    public function inquiryOneRelationshi()
    {
        return $this->belongsTo(Inquiry::class);
    }

    public function getTenQuoRelationship()
    {
        return $this->hasMany(Quotation::class);
    }

    
}
