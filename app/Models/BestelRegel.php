<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestelRegel extends Model
{
    use HasFactory;
    protected $fillable = ['amount'];
    public  $timestamps = false;
}
