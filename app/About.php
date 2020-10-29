<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table="contacts";
    protected $fillable = [
        'name', 'email', 'phone','message'
    ];

}
