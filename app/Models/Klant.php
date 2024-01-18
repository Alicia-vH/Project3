<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $fillable = ['name, address, residence, phonenumber, emailaddress'];
    public  $timestamps = false;
}
