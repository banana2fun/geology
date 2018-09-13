<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MineralClass extends Model
{
    protected $fillable = ['name'];

    public function minerals()
    {
        return $this->hasMany(Mineral::class, 'min_class_id');
    }
}
