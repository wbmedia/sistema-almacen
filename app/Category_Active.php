<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Active;

class Category_Active extends Model
{
    protected $table = "categories_actives";

    protected $fillable = ['name'];

    public function actives()
    {
        return $this->hasMany('Active');
    }
}
