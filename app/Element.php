<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $fillable = ['symbol', 'en_element_name', 'ru_element_name', 'atomic_weight'];

    public function minerals()
    {
        return $this->belongsToMany(Mineral::class)->withPivot('percent_in_mineral');
    }
}
