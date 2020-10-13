<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    // use HasFactory;

    public function QuoTenRelastionship()
    {
        return $this->belongsTo(tender::class);
    }

    public function QuoSupRelastionship()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function QuoProRelastionship()
    {
        return $this->belongsTo(Products::class);
    }

}
