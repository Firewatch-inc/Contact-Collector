<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table      = 'CPerson';
    protected $primaryKey = 'id_person';
    public $timestamps    = false;

    protected $fillable = [
        'second_name',
        'first_name',
        'patronymic'
    ];

    
}
