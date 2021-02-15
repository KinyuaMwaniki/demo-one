<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    public function type() {
        return $this->belongsTo(ProductType::class, 'type_id');
    }
}
