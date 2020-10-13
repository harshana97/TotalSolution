<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // use HasFactory;

    public function inquiryManyrelastionship()
    {
        return $this->belongsTo(Inquiry::class);
    }

    public function industryOnerelationship()
    {
        return $this->hasOne(Industry::class);
    }

    public function getProQuoRelationship()
    {
        return $this->hasMany(Quotation::class);
    }

}
