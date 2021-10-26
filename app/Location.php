<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "locations";

    protected $fillable = ['description'];
    protected $guarded = [];

    public function actives()
    {
        return $this->hasMany('Active');
    }
}
