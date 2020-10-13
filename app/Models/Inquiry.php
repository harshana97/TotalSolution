<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    // use HasFactory;

    public function customerManyrelastionship()
    {
        return $this->belongsTo(Customer::class);
    }

    public function tenderOnerelationship()
    {
        return $this->hasOne(Tender::class);
    }

    public function getproductRelationship()
    {
        return $this->hasMany(Product::class);
    }

    public function FinalQuoRelationship()
    {
        return $this->hasOne(FinalQuotation::class);
    }


}
