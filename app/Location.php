<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "locations";

    protected $fillable = ['description'];

    public function actives()
    {
        return $this->hasMany('Active');
    }
}
