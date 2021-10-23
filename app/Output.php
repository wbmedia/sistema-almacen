<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    protected $table = "outputs";

    protected $fillable = ['job_id', 'date', 'place', 'responsible', 'note', 'state'];

    public function job()
    {
        return $this->belongsTo('Job');
    }

    public function scopeSearchJob($query, $job)
    {
        if ($job != '') {
            return $query->where('job_id', $job);
        }
    }

    public function scopeSearchDate($query, $date)
    {
        if ($date != '') {
            return $query->where('date', $date);
        }
    }
}
