<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_provinsi',
        'kota',
        'kode_pos'
    ];

    // public function putUnitItem() {
    //     return $this->hasMany('App\Models\provinsi', 'id');
    // }

    // use HasFactory;

    // protected $primaryKey = 'id';
    // protected $fillable = [
    //     'nama_provinsi','kota','kode_pos'
    // ];
}
