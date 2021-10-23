<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $table = "actives";

    protected $fillable = ['category_active_id', 'name', 'features', 'unit', 'stock', 'location_id', 'note', 'state'];

    public function categoryActive()
    {
        return $this->belongsTo('Category_Active');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }

    public function historyActives()
    {
        return $this->hasMany('HistoryActive');
    }

    public function jobs()
    {
        return $this->belongsToMany('Job')->withTimestamps();
    }

    public function scopeSearchActive($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeSearchCategoryAct($query, $categoryAct)
    {
        if ($categoryAct != '') {
            return $query->where('category_active_id', $categoryAct);
        }

    }

    public function scopeSearchLocation($query, $location)
    {
        if ($location != '') {
            return $query->where('location_id', $location);
        }
    }
}
