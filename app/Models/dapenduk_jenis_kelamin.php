<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dapenduk_jenis_kelamin extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];

    protected $fillable = [
        'jenis_kelamin',
        'jumlah'
    ];
}
