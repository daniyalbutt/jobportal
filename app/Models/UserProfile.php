<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['user_id', 'user_image', 'phone', 'country', 'state', 'city', 'zip_code', 'about_us', 'job_description', 'address', 'website', 'google', 'facebook', 'twitter', 'linkedin'];
}
