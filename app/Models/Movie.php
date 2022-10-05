<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;
use Illuminate\Testing\Constraints\SoftDeletes;

class Movie extends Model
{
    use HasFactory, EloquentSoftDeletes;
    protected $fillable = ['name', 'slug', 'category', 'video_url', 'thumbnail', 'rating', 'is_featured'];
}
