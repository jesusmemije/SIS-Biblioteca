<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
