<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialQualification extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['user_id', 'name'];
}
