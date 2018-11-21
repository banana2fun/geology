<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mineral extends Model
{
    use SoftDeletes;
    protected $fillable = ['ru_name', 'en_name', 'formula', 'min_class_id'];

    public function minClass()
    {
        return $this->belongsTo(MineralClass::class);
    }

    public function elements()
    {
        return $this->belongsToMany(Element::class)->withPivot('percent_in_mineral');
    }
}
