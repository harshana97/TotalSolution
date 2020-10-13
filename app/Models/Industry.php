<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    // use HasFactory;

    public function getSupplierManytoManyRelationship(){

        return $this->belongsToMany(Supplier::class, 'sup_inds');

    }

    public function productOneRelationshi()
    {
        return $this->belongsTo(Products::class);
    }
}
