<?php

namespace Modules\Ppdb\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Ppdb\Database\Factories\SiswaFactory;

class Siswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): SiswaFactory
    // {
    //     // return SiswaFactory::new();
    // }
}
