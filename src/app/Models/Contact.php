<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LSex;

class Contact extends Model
{
    protected $table      = 'CPerson';
    protected $primaryKey = 'id_person';
    public $timestamps    = false;

    protected $fillable = [
        'second_name',
        'first_name',
        'patronymic',
        'birthday',
        'id_sex'
    ];

    public function sex()
    {
        return Contact::hasOne(LSex::class, 'id_sex', 'id_sex')->first()->description;
    }

    
}
