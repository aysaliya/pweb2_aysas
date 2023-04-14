<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanan";
    protected $guarded = [];
    protected $primaryKey = 'nomor_antrian';
}
