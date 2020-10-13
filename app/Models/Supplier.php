<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    // use HasFactory;


    public function getIndustryManytoManyRelationship(){

        return $this->belongsToMany(Industry::class, 'sup_inds');

    }

    public function getSupQuoRelationship()
    {
        return $this->hasMany(Quotation::class);
    }


}
