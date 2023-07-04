<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bilet extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['ryad', 'mesto', 'numb_kart', 'year', 'CVC'];
}
