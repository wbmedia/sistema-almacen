<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = ['description'];

    public function outputs()
    {
        return $this->hasMany('Output');
    }

    public function actives()
    {
        return $this->belongsToMany('Active')->withTimestamps();
    }
}
