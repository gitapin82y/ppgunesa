<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpgPrajabatan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ppg_prajabatan';
    protected $guarded = [];
}
