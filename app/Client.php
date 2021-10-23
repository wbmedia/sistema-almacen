<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'subject',
        'first_name',
        'last_name',
        'company',
        'email',
        'phone_number',
        'mobile_number',
        'rfc',
        'address',
    ];
}
