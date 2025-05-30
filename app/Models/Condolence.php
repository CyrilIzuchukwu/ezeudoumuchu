<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condolence extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'tribute',
        'ip_address'
    ];


}
