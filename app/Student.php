<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'no';  //hangi degere göre sileceksen onu primary key yapmak zorundasın
    protected $fillable=[
        'no',
        'ad',
        'soyad'
    ];
}
