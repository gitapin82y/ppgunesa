<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpgDalamJabatan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ppg_dalam_jabatan';
    protected $guarded = [];
}
